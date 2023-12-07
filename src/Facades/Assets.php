<?php

namespace Tec\Assets\Facades;

use Illuminate\Support\Facades\Facade;
use Tec\Assets\Assets as AssetService;

class Assets extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return AssetService::class;
    }
}
