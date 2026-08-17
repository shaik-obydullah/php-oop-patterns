<?php

abstract class Car
{
    // Abstract — child MUST implement
    abstract public function engine(): string;

    // Concrete — child inherits or overrides
    public function horn(): string
    {
        return "Beep!";
    }
}

class Toyota extends Car
{
    public function engine(): string
    {
        return "Electric engine";
    }

    // Override parent's concrete method
    public function horn(): string
    {
        return "Toyota beep!";
    }
}

class BMW extends Car
{
    public function engine(): string
    {
        return "Petrol engine";
    }

    // Uses parent's concrete method as-is
}

$toyota = new Toyota();
echo "Toyota engine: " . $toyota->engine() . "\n";
echo "Toyota horn: " . $toyota->horn() . "\n";

echo "\n---\n\n";

$bmw = new BMW();
echo "BMW engine: " . $bmw->engine() . "\n";
echo "BMW horn: " . $bmw->horn() . "\n";
