<?php


namespace App\Services\Cache;


class FileCache implements CacheDriver
{
    public function cache(string $name): string
    {
        // TODO: Implement cache() method.
        return "这是".$name."驱动";
    }
}
