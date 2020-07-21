<?php

namespace Tests;

use Cblink\Service\ShortUrl\ShortUrl;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /***
     * @var ShortUrl
     */
    protected $app;

    public function setUp(): void
    {
        parent::setUp();
        $this->createApp();
    }

    public function createApp()
    {
        $config = [
            'private' => true,
            'base_url' => 'xxxxxxxxxxxxxxxxxx',
            'app_id' => 1,
            'key' => 'xxxxxxxxxxxxxxx',
            'secret' => 'xxxxxxxxxx',
        ];

        $configFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config/short-url.php';

        if (file_exists($configFile)) {
            $config = include $configFile;
        }

        $this->app = new ShortUrl($config);
    }
}