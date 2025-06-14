<?php

namespace Loading\FilamentLoading\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Loading\FilamentLoading\FilamentLoading
 */
class FilamentLoading extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Loading\FilamentLoading\FilamentLoading::class;
    }
}
