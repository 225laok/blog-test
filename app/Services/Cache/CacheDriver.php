<?php


namespace App\Services\Cache;


interface CacheDriver
{

    public function cache(string $name): string;
}
