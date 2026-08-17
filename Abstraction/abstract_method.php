<?php

abstract class Car
{
    abstract public function engine(): string;
}

class Toyota extends Car
{
    public function engine(): string
    {
        return "Electric engine";
    }
}

class BMW extends Car
{
    public function engine(): string
    {
        return "Petrol engine";
    }
}

$toyota = new Toyota();
echo $toyota->engine() . "\n";

$bmw = new BMW();
echo $bmw->engine();
