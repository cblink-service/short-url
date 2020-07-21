<?php

namespace Cblink\Service\ShortUrl;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['api'] = function(ShortUrl $shortUrl){
            return new Client($shortUrl);
        };
    }
}