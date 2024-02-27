<?php

namespace Tarek\LaravelUniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @see \Tarek\LaravelUniqueSlug\UniqueSlug
 */

Class UniqueSlug extends Facade 
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     */
    protected static function getFacadeAccessor() : string
    {
        return "Laravel-unique-slug";
    }
}