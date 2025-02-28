<?php

abstract class Shape
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    abstract public function CalculateArea(): float;
}

class Square extends Shape
{
    protected float $size;

    public function __construct($size)
    {
        parent::__construct('Square');
        $this->size = $size;
    }

    public function CalculateArea(): float
    {
        return $this->size * $this->size;
    }
}

$square1 = new Square(5);

echo $square1->CalculateArea();