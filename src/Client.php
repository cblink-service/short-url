<?php

namespace Cblink\Service\ShortUrl;

use Cblink\Service\Kennel\AbstractApi;

/**
 * Class Client
 * @package Cblink\Service\ShortUrl
 */
class Client extends AbstractApi
{

    /**
     * 创建短链接
     *
     * @param $content
     * @param int $expired_minute
     * @return \Cblink\Service\Kennel\HttpResponse
     */
    public function createUrl($content, $expired_minute = 0)
    {
        return $this->post('manage/short-url', [
            'content' => $content,
            'expired_time' => $expired_minute
        ]);
    }

    /**
     * 获取短链接内容
     *
     * @param $id
     * @return \Cblink\Service\Kennel\HttpResponse
     */
    public function getText($id)
    {
        return $this->get(sprintf('t/%s', $id));
    }

}