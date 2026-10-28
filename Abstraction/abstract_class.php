<?php

abstract class Car
{
    public function __construct(public string $brand)
    {
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function start(): string
    {
        return $this->brand . " is starting...";
    }

    public function stop(): string
    {
        return $this->brand . " is stopping...";
    }

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

class Tesla extends Car
{
    public function engine(): string
    {
        return "Dual motor electric engine";
    }
}

$toyota = new Toyota("Toyota");
echo "Brand: " . $toyota->getBrand() . "\n";
echo $toyota->start() . "\n";
echo "Engine: " . $toyota->engine() . "\n";
echo $toyota->stop() . "\n\n";

$bmw = new BMW("BMW");
echo "Brand: " . $bmw->getBrand() . "\n";
echo $bmw->start() . "\n";
echo "Engine: " . $bmw->engine() . "\n";
echo $bmw->stop() . "\n\n";

$tesla = new Tesla("Tesla");
echo "Brand: " . $tesla->getBrand() . "\n";
echo $tesla->start() . "\n";
echo "Engine: " . $tesla->engine() . "\n";
echo $tesla->stop() . "\n";