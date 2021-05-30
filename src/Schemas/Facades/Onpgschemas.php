<?php

namespace Onpgschemas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Onpgschemas
 *
 * @package Onpgschemas
 */
class Onpgschemas extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Schemas';
    }
}
