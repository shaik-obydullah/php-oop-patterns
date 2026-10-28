<?php

class Car
{
    public string $brand;
    protected string $color;
    private int $year;

    public function __construct(string $brand, string $color, int $year)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getInfo(): string
    {
        return $this->brand . " (" . $this->color . ")";
    }
}

class Toyota extends Car
{
    public string $model;

    public function __construct(string $brand, string $color, int $year, string $model)
    {
        parent::__construct($brand, $color, $year);
        $this->model = $model;
    }

    // Override parent method
    public function getInfo(): string
    {
        return $this->brand . " " . $this->model . " (" . $this->color . ")";
    }

    public function getModel(): string
    {
        return $this->model;
    }
}

class ElectricCar extends Car
{
    private int $batteryRange;

    public function __construct(string $brand, string $color, int $year, int $batteryRange)
    {
        parent::__construct($brand, $color, $year);
        $this->batteryRange = $batteryRange;
    }

    public function getRange(): int
    {
        return $this->batteryRange;
    }

    public function getInfo(): string
    {
        return parent::getInfo() . " — Range: " . $this->batteryRange . "km";
    }
}

echo "=== Toyota ===\n";
$toyota = new Toyota("Toyota", "White", 2024, "Camry");
echo "Brand: " . $toyota->getBrand() . "\n";
echo "Model: " . $toyota->getModel() . "\n";
echo "Color: " . $toyota->getColor() . "\n";
echo "Info: " . $toyota->getInfo() . "\n";

// ❌ private — cannot access
// echo $toyota->year;

echo "\n=== Electric Car ===\n";
$tesla = new ElectricCar("Tesla", "Black", 2024, 500);
echo "Brand: " . $tesla->getBrand() . "\n";
echo "Color: " . $tesla->getColor() . "\n";
echo "Range: " . $tesla->getRange() . "km\n";
echo "Info: " . $tesla->getInfo() . "\n";
