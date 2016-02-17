<?php

class PluginTest extends WP_UnitTestCase
{

    function testGlobalPluginInstance()
    {
		global $WPMT;
		$this->assertInstanceof('WPMT\Plugin', $WPMT);
	}

    function testPluginInstanciation()
    {
        $plugin = \WPMT\Plugin::getInstance();
		$this->assertInstanceof('WPMT\Plugin', $plugin);
	}

    function testMakeEngine()
    {
        $WPMT = \WPMT\Plugin::getInstance();
        $engine = $WPMT->makeEngine('Twig', ['templatePath' => '', 'cachePath' => '']);
        $this->assertInstanceOf('\WPMT\TwigEngine', $engine);
    }

    function testGetEngine()
    {
        $WPMT = \WPMT\Plugin::getInstance();
        $engine = $WPMT->makeEngine('Twig', ['templatePath' => '', 'cachePath' => '']);
        $this->assertInstanceOf('\WPMT\TwigEngine', $WPMT->getEngine());
    }

}

