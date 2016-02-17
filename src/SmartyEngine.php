<?php
namespace WPMT;

class SmartyEngine implements EngineInterface
{
    public $engine;

    public function __construct($settings)
    {
        $smarty = new \Smarty();
        $smarty->setTemplateDir($settings['templatePath']);

        if (isset($settings['cachePath'])) {
            $smarty->setCacheDir($settings['cachePath']);
        }

        if (isset($settings['compilePath'])) {
            $smarty->setCompileDir($settings['compilePath']);
        }

        if (isset($settings['configPath'])) {
            $smarty->setConfigDir($settings['configPath']);
        }

        $this->engine = $smarty;

    }

    public function render($template, $data)
    {
        foreach ($data as $var => $value) {
            $this->engine->assign($var, $value);
        }
        echo $this->engine->display($template);
    }
}
