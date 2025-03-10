<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\Gpu;
use App\OledScreen;

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
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());

        $gpuLaptop = new Gpu($laptop);

        $this->assertSame(1000, $gpuLaptop->getPrice());
        $this->assertSame("A laptop computer, with a GPU", $gpuLaptop->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());

        $oledLaptop = new OledScreen($laptop);

        $this->assertSame(700, $oledLaptop->getPrice());
        $this->assertSame("A laptop computer, with an OLED screen", $oledLaptop->getDescription());
    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $laptop = new Laptop();

        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());

        $gpuLaptop = new Gpu($laptop);

        $this->assertSame(1000, $gpuLaptop->getPrice());
        $this->assertSame("A laptop computer, with a GPU", $gpuLaptop->getDescription());

        $gpuOledLaptop = new OledScreen($gpuLaptop);

        $this->assertSame(1300, $gpuOledLaptop->getPrice());
        $this->assertSame("A laptop computer, with a GPU, with an OLED screen", $gpuOledLaptop->getDescription());
    }
}
