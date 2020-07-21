<?php

namespace Cblink\Service\ShortUrl;

use Cblink\Service\Kennel\ServiceContainer;

/**
 * Class ShortUrl
 * @package Cblink\Service\ShortUrl
 */
class ShortUrl extends ServiceContainer
{
    /**
     * @var string
     */
    protected $base_url = 'https://api.service.cblink.net/dwz';

    /**
     * 创建短链接
     *
     * @param $content
     * @param int $expired_minute
     * @return \Cblink\Service\Kennel\HttpResponse
     */
    public function createUrl($content, $expired_minute = 0)
    {
        return $this->api->createUrl(...func_get_args());
    }

    /**
     * 获取短链接内容
     *
     * @param $id
     * @return \Cblink\Service\Kennel\HttpResponse
     */
    public function getText($id)
    {
        return $this->api->getText(...func_get_args());
    }

    protected function getCustomProviders(): array
    {
        return [
            ServiceProvider::class,
        ];
    }
}