<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Factories;

use App\DesignPatterns\Factories\AbstractFactory\Elements\Bootstrap\ButtonBootstrap;
use App\DesignPatterns\Factories\AbstractFactory\Elements\Bootstrap\CheckboxBootstrap;
use App\DesignPatterns\Factories\AbstractFactory\Elements\ButtonInterface;
use App\DesignPatterns\Factories\AbstractFactory\Elements\CheckboxInterface;
use App\DesignPatterns\Factories\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    /**
     * @return CheckboxInterface
     */
    public function buildCheckbox(): CheckboxInterface
    {
        return new CheckboxBootstrap();
    }
}
