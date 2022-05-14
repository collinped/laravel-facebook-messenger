<?php

namespace Collinped\FacebookMessenger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Collinped\FacebookMessenger\FacebookMessenger
 */
class FacebookMessenger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-facebook-messenger';
    }
}
