<?php

namespace TypesToon\types;

class Str
{
    private string $value;

    public function __construct(string $value="")
    {
        $this->value = $value;
    }
    public function upper()
    {
        return new self(strtoupper($this->value));
    }

    public function lower()
    {
        return new self(strtolower($this->value));
    }

    public function get()
    {
        return $this->value;
    }

    public function length()
    {
        return strlen($this->value);
    }

    public function concat(string $str)
    {
        return new self($this->value . $str);
    }

    public function replace(string $search, string $replace)
    {
        return new self(str_replace($search, $replace, $this->value));
    }

    public function substring(int $start, ?int $length = null)
    {
        if ($length === null) {
            return new self(substr($this->value, $start));
        }
        return new self(substr($this->value, $start, $length));
    }


    public function contains(string $substring)
    {
        return strpos($this->value, $substring) !== false;
    }

    public function trim()
    {
        return new self(trim($this->value));
    }

    public function toArray(string $delimiter = ',')
    {
        return explode($delimiter, $this->value);
    }

    public function __toString()
    {
        return $this->value;
    }

    public function capitalize()
    {
        return new self(ucfirst($this->value));
    }

    public function endsWith(string $suffix)
    {
        return substr($this->value, -strlen($suffix)) === $suffix;
    }
    public function startsWith(string $prefix)
    {
        return substr($this->value, 0, strlen($prefix)) === $prefix;
    }

    public function repeat(int $times)
    {
        return new self(str_repeat($this->value, $times));
    }
}