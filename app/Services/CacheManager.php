<?php

namespace App\Services;

use App\Services\Cache\Factory;
use App\Services\Cache\FileCache;
use App\Services\Cache\RedisCache;
use http\Exception\InvalidArgumentException;

class CacheManager extends \Illuminate\Support\Manager
{
    public function getDefaultDriver()
    {
        // TODO: Implement getDefaultDriver() method.
        throw new InvalidArgumentException('No Coupon group driver was specified.');
    }

    public function createFileDriver()
    {
        return new FileCache();
    }

    public function createRedisDriver()
    {
        return new RedisCache();
    }
}
