<?php

namespace TypesToon;

use TypesToon\types\Arr;
use TypesToon\types\Str;
use TypesToon\types\Num;

class Toon
{
    public static function Str(?string $value = ""): Str
    {
        return new Str($value);
    }
    public static function Num(?int $value = 0)
    {
        return new Num($value);
    }
    public static function Arr(?array $value = [])
    {
        return new Arr($value);
    }

}