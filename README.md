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

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
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
