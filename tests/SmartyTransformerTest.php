<?php

namespace PhpTransformers\PhpTransformer\Test;

use PhpTransformers\Smarty\SmartyTransformer;

class SmartyTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testRenderFile()
    {
        $engine = new SmartyTransformer();
        $template = 'tests/Fixtures/SmartyTransformer.smarty';
        $locals = array(
            'name' => 'Linus',
        );
        $actual = $engine->renderFile($template, $locals);
        self::assertEquals('Hello, Linus!', $actual);
    }

    public function testRender()
    {
        $engine = new SmartyTransformer();
        $template = file_get_contents('tests/Fixtures/SmartyTransformer.smarty');
        $locals = array(
            'name' => 'Linus',
        );
        $actual = $engine->render($template, $locals);
        self::assertEquals('Hello, Linus!', $actual);
    }

    public function testGetName()
    {
        $engine = new SmartyTransformer();
        self::assertEquals('smarty', $engine->getName());
    }
}
