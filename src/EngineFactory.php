<?php
namespace WPMT;

class EngineFactory
{
    public static function make($name, $settings)
    {
        $engine = '\\WPMT\\' . $name . 'Engine';
        if (class_exists($engine)) {
            return new $engine($settings); 
        }
    }
}
