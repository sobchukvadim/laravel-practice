<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Interfaces;

use App\DesignPatterns\Factories\AbstractFactory\Elements\ButtonInterface;
use App\DesignPatterns\Factories\AbstractFactory\Elements\CheckboxInterface;

interface GuiFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface;

    /**
     * @return CheckboxInterface
     */
    public function buildCheckbox(): CheckboxInterface;
}
