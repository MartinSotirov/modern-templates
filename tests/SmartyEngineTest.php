<?php

class SmartyEngineTest  extends WP_UnitTestCase
{
    function testRender()
    {
        $WPMT = \WPMT\Plugin::getInstance();
        $engine = $WPMT->makeEngine('Smarty', [
            'templatePath' => dirname(__FILE__) . '/templates',
            'cachePath'    => dirname(__FILE__) . '/templates/cache',
            'compilePath'  => dirname(__FILE__) . '/templates/compile',

        ]);
        ob_start();
        $engine->render('smarty.tpl', ['test' => 'Hello World']);
        $output = ob_get_clean();
        $this->assertContains('Hello World', $output);
    }
}

