<?php

namespace Tec\Assets\Facades;

use Tec\Assets\Assets;
use Illuminate\Support\Facades\Facade;

class AssetsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Assets::class;
    }
}
