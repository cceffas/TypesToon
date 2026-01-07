<?php

namespace TypesToon\types;

class Num
{
    private float $value;

    public function __construct(float $value = 0)
    {
        $this->value = $value;
    }
    public function get()
    {
        return $this->value;
    }

    public function add(float $num)
    {
        return new self($this->value + $num);
    }
    public function subtract(float $num)
    {
        return new self($this->value - $num);
    }
    public function multiply(float $num)
    {
        return new self($this->value * $num);
    }
    public function divide(float $num)
    {
        if ($num == 0) {
            throw new \InvalidArgumentException("Division by zero");
        }
        return new self($this->value / $num);
    }

    public function round(int $precision = 0)
    {
        return new self(round($this->value, $precision));
    }
    public function floor()
    {
        return new self(floor($this->value));
    }
    public function ceil()
    {
        return new self(ceil($this->value));

    }
    public function abs()
    {
        return new self(abs($this->value));
    }

    public function pow(float $exp)
    {
        return new self(pow($this->value, $exp));
    }

    public function sqrt()
    {
        if ($this->value < 0) {
            throw new \InvalidArgumentException("Cannot compute square root of negative number");
        }
        return new self(sqrt($this->value));
    }


    public function __toString()
    {
        return (string) $this->value;
    }

    public function toInt()
    {
        return (int) $this->value;
    }
    public function toFloat()
    {
        return $this->value;
    }

    public function toNum()
    {
        return $this;
    }
    public function isEven()
    {
        return $this->value % 2 == 0;
    }
    public function isOdd()
    {
        return $this->value % 2 != 0;
    }
    public function isPositive()
    {
        return $this->value > 0;
    }
    public function isNegative()
    {
        return $this->value < 0;
    }

    public function equals(float $num)
    {
        return $this->value == $num;
    }

}
