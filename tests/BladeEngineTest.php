<?php

class BladeEngineTest  extends WP_UnitTestCase
{
    function testRender()
    {
        $WPMT = \WPMT\Plugin::getInstance();
        $engine = $WPMT->makeEngine('Blade', [
            'templatePath' => dirname(__FILE__) . '/templates',
            'cachePath' => dirname(__FILE__) . '/templates/cache'
        ]);
        ob_start();
        $engine->render('template', ['test' => 'Hello World']);
        $output = ob_get_clean();
        $this->assertContains('Hello World', $output);
    }
}

