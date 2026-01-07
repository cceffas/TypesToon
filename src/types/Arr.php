<?php

namespace TypesToon\types;

class Arr
{

    private array $value=[];

    public function __construct(array $value=[])
    {
        $this->value = $value;
    }

    public function get()
    {
        return $this->value;
    }

    public function length()
    {
        return count($this->value);
    }

    public function push($item)
    {
        return new self(array_merge($this->value, [$item]));
    }

    public function pop()
    {
        if (empty($this->value)) {
            return new self([]);
        }
        $lastItem = array_pop($this->value);
        return new self($this->value);
    }

    public function contains($item)
    {
        return in_array($item, $this->value, true);
    }

    public function merge(array $arr)
    {
        return new self(array_merge($this->value, $arr));
    }

    public function slice(int $offset, ?int $length = null)
    {
        if ($length === null) {
            return new self(array_slice($this->value, $offset));
        }
        return new self(array_slice($this->value, $offset, $length));
    }

    public function indexOf($item)
    {
        $index = array_search($item, $this->value, true);
        return $index === false ? -1 : $index;
    }


    public function reverse()
    {
        return new self(array_reverse($this->value));
    }

    public function unique()
    {
        return new self(array_values(array_unique($this->value)));
    }

    public function __toString()
    {
        return json_encode($this->value);
    }

    public function map(callable $callback)
    {
        return new self(array_map($callback, $this->value));
    }

    public function filter(callable $callback)
    {
        return new self(array_values(array_filter($this->value, $callback)));
    }

    public function reduce(callable $callback, $initial = null)
    {
        return array_reduce($this->value, $callback, $initial);
    }

    public function forEach(callable $callback)
    {
        foreach ($this->value as $item) {
            $callback($item);
        }
    }


    public function clear()
    {
        return new self([]);
    }

    public function isEmpty()
    {
        return empty($this->value);
    }

    public function toString(string $glue = ',')
    {
        return implode($glue, $this->value);
    }

    public function sliceArray(int $offset, ?int $length = null)
    {
        if ($length === null) {
            return new self(array_slice($this->value, $offset));
        }
        return new self(array_slice($this->value, $offset, $length));
    }

}