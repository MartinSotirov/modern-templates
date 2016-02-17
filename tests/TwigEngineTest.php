<?php

class TwigEngineTest  extends WP_UnitTestCase
{
    function testRender()
    {
        $WPMT = \WPMT\Plugin::getInstance();
        $engine = $WPMT->makeEngine('Twig', [
            'templatePath' => dirname(__FILE__) . '/templates',
            'cachePath' => dirname(__FILE__) . '/templates/cache'
        ]);
        ob_start();
        $engine->render('template.twig', ['test' => 'Hello World']);
        $output = ob_get_clean();
        $this->assertContains('Hello World', $output);
    }
}

