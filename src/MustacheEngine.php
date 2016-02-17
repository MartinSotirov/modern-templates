<?php
namespace WPMT;

class MustacheEngine implements EngineInterface
{
    public $engine;

    public function __construct($settings)
    {
        $mustache = new \Mustache_Engine([
            'loader'          => new \Mustache_Loader_FilesystemLoader($settings['templatePath']),
            'partials_loader' => new \Mustache_Loader_FilesystemLoader($settings['partialsPath']),
            'cache'           => $settings['cachePath']
        ]);
        $this->engine = $mustache;

    }

    public function render($template, $data)
    {
        $tpl = $this->engine->loadTemplate($template);
        echo $tpl->render($data);
    }
}
