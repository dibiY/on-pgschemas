<?php

namespace ONPGSchemas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class PGSchema
 *
 * @package ONPGSchemas
 */
class ONPGSchemas extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pgschema';
    }
}
