<?php


namespace App\Facades;


use App\Services\Cache\Factory;
use Illuminate\Support\Facades\Facade;

class CacheGroup extends Facade
{
    public static function getFacadeAccessor()
    {
        return "cache:app";
    }
}
