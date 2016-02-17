<?php

class EngineFactoryTest  extends WP_UnitTestCase
{

	function testMakeTwig()
    {
        $twig = \WPMT\EngineFactory::make('Twig', ['templatePath' => '', 'cachePath' => '']);
        $this->assertInstanceOf('\WPMT\TwigEngine', $twig);
	}

}

