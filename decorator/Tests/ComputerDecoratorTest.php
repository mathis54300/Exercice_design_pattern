<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new \App\Laptop();
        $laptopWithGpu = new \App\GpuDecorator($laptop);

        $this->assertSame(600, $laptopWithGpu->getPrice());
        $this->assertSame("A laptop computer, with a GPU", $laptopWithGpu->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new \App\Laptop();
        $laptopWithOledScreen = new \App\OledScreenDecorator($laptop);

        $this->assertSame(700, $laptopWithOledScreen->getPrice());
        $this->assertSame("A laptop computer with an OLED screen", $laptopWithOledScreen->getDescription());
    }
}