<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Factories;

use App\DesignPatterns\Factories\AbstractFactory\Elements\ButtonInterface;
use App\DesignPatterns\Factories\AbstractFactory\Elements\CheckboxInterface;
use App\DesignPatterns\Factories\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        // TODO: Implement buildButton() method.
    }

    public function buildCheckbox(): CheckboxInterface
    {
        // TODO: Implement buildCheckbox() method.
    }
}


