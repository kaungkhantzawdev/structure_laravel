<?php

namespace App\Libraries\Hash;

use Illuminate\Support\Facades\Facade;

class JudgifyHashFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'judgifyhash';
    }
}
