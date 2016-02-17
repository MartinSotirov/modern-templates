<?php

class MustacheEngineTest  extends WP_UnitTestCase
{
    function testRender()
    {
        $WPMT = \WPMT\Plugin::getInstance();
        $engine = $WPMT->makeEngine('Mustache', [
            'templatePath' => dirname(__FILE__) . '/templates',
            'cachePath'    => dirname(__FILE__) . '/templates/cache',
            'partialsPath' => dirname(__FILE__) . '/templates/partials',
        ]);
        ob_start();
        $engine->render('template.mustache', ['test' => 'Hello World']);
        $output = ob_get_clean();
        $this->assertContains('Hello World', $output);
    }
}

