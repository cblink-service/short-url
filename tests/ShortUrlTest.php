<?php

namespace Tests;

/**
 * Class ShortUrlTest
 * @package Tests
 */
class ShortUrlTest extends TestCase
{

    // 生成短链接
    public function testCreates()
    {
        $content = 'http://www.cblink.net';

        // 生成短链接
        $response = $this->app->createUrl($content);

        // 判断是否请求成功
        $this->assertTrue($response->success());

        // 返回值的参数，可以通过,response->get('xxx') 方式获取
        $this->assertIsString($response->get('key'));
        $this->assertIsString($response->get('url'));
    }

    // 获取短链接内容
    public function testGetText()
    {

        $content = 'http://www.cblink.net';

        // 生成短链接
        $response = $this->app->createUrl($content);

        // 获取内容
        $text = $this->app->getText($response->get('key'));

        // 判断是否请求成功
        $this->assertTrue($response->success());
        // text => 内容
        $this->assertIsString($text->get('text'));
    }

}