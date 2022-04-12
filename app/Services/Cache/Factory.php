<?php


namespace App\Services\Cache;


interface Factory
{
    public function driver($driver = null);
}
