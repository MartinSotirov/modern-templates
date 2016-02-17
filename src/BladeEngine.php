<?php
namespace WPMT;
use Philo\Blade\Blade;

class BladeEngine implements EngineInterface
{
    public $engine;

    public function __construct($settings)
    {
        $this->engine = new Blade($settings['templatePath'], $settings['cachePath']);
    }

    public function render($template, $data)
    {
        echo $this->engine
                  ->view()
                  ->make($template)
                  ->with($data)
                  ->render();
    }
}
