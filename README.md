# WP Modern Templates

[![Software License][ico-license]](LICENSE.txt)
[![Build Status][ico-travis]][link-travis]

A WordPress Plugin allowing the usage of Twig, Blade, Mustache and Smarty templates in any WordPress view.

## Install

Via git in the WordPress plugins directory

``` bash
$ git clone https://github.com/MartinSotirov/modern-templates.git
```

## Usage

### Enabling Twig
``` php
add_filter( 'wpmt_engine', 'make_twig_engine', 2, 10 );
function make_twig_engine( $engine, $WPMT ) {
    $settings = array(
        'templatePath' => get_stylesheet_directory() . '/templates',
        'cachePath'    => get_stylesheet_directory() . '/templates/cache'
    );
	$engine = $WPMT->makeEngine('Twig', $settings);
	return $engine;
}
```

### Enabling Blade
``` php
add_filter( 'wpmt_engine', 'make_blade_engine', 2, 10 );
function make_blade_engine( $engine, $WPMT ) {
    $settings = array(
        'templatePath' => get_stylesheet_directory() . '/templates',
        'cachePath'    => get_stylesheet_directory() . '/templates/cache'
    );
	$engine = $WPMT->makeEngine('Blade', $settings);
	return $engine;
}
```

### Enabling Smarty
``` php
add_filter( 'wpmt_engine', 'make_smarty_engine', 2, 10 );
function make_smarty_engine( $engine, $WPMT ) {
    $settings = array(
        'templatePath' => get_stylesheet_directory() . '/templates',
        'cachePath'    => get_stylesheet_directory() . '/templates/cache',
        'compilePath'  => get_stylesheet_directory() . '/templates/compile',
        'configPath'   => get_stylesheet_directory() . '/templates/config',
    );
	$engine = $WPMT->makeEngine('Smarty', $settings);
	return $engine;
}
```

### Enabling Mustache
``` php
add_filter( 'wpmt_engine', 'make_mustache_engine', 2, 10 );
function make_mustache_engine( $engine, $WPMT ) {
    $settings = array(
        'templatePath' => get_stylesheet_directory() . '/templates',
        'cachePath'    => get_stylesheet_directory() . '/templates/cache',
        'partialsPath' => get_stylesheet_directory() . '/templates/partials',
    );
	$engine = $WPMT->makeEngine('Mustache', $settings);
	return $engine;
}
```

### Rendering templates
The plugin abstracts away the technicalities of all four templating engines and provides
a consistent API for rendering. With the WordPress plugin enabled, you have access to the
global variable $WPMT. Use it to get an instance of the templating engine you instanciated
in the `wpmt_engine` hook
``` php
$twig = $WPMT->getEngine();
$data = [
    'wp_head'    => $WPMT->get('wp_head'),
    'wp_footer'  => $WPMT->get('wp_footer'),
    'body_class' => $WPMT->get('body_class'),
    'post'       => get_queried_object(),
];

echo $twig->render('single-post.html', $data);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ bin/install-wp-tests.sh
$ phpunit
```

## Contributing

None so far

## License

GPL 2. Please see [License File](LICENSE.md) for more information.

[ico-license]: https://camo.githubusercontent.com/1e084a16de2002b053b5087d7c652941091cc5ea/687474703a2f2f696d672e736869656c64732e696f2f62616467652f6c6963656e73652d47504c76322d627269676874677265656e2e737667
[ico-travis]: https://travis-ci.org/MartinSotirov/modern-templates.svg?branch=master
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square

[link-travis]: https://travis-ci.org/MartinSotirov/modern-templates
[link-author]: https://github.com/MartinSotirov
