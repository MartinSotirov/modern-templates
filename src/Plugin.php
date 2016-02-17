<?php
namespace WPMT;
use Philo\Blade\Blade;

class Plugin
{
    private static $instance;

    public $engine;

    private function __construct() {}

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Plugin;
        }
        return self::$instance;
    }

    public function makeEngine($name, $settings)
    {
        $engine = \WPMT\EngineFactory::make($name, $settings);
        $this->engine = $engine;
        return $engine;
    }

    public function getEngine()
    {
        return apply_filters( 'wpmt_engine', $this->engine, $this );
    }

    public function get($function_name)
    {
        ob_start();
        call_user_func($function_name);
        return ob_get_clean();
    }
}

