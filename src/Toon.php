<?php

namespace TypesToon;

use TypesToon\types\Arr;
use TypesToon\types\Str;


class Toon
{
    public static function Str(?string $value): Str
    {
        return new Str($value);
    }
    public static function Int(?int $value)
    {
        // Implementation for Int type
    }
    public static function Arr(?array $value)
    {
        return new Arr($value);
    }
}




