<?php

namespace TypesToon;

use TypesToon\types\Str;


class Toon
{
    public static function str(string $value): Str
    {
        return new Str($value);
    }
}