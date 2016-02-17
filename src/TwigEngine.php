<?php
namespace WPMT;

class TwigEngine implements EngineInterface
{
	public $engine;

	public function __construct($settings)
	{
		$loader = new \Twig_Loader_Filesystem($settings['templatePath']);
		$this->engine = new \Twig_Environment($loader, ['cache' => $settings['cachePath']]);
	}

	public function render($template, $data)
	{
		echo $this->engine->render($template, $data);
	}
}
