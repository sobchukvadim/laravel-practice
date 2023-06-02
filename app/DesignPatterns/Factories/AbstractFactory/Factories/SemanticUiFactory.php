<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Factories;

use App\DesignPatterns\Factories\AbstractFactory\Elements\ButtonInterface;
use App\DesignPatterns\Factories\AbstractFactory\Elements\CheckboxInterface;
use App\DesignPatterns\Factories\AbstractFactory\Elements\SemanticUi\SemanticUiButton;
use App\DesignPatterns\Factories\AbstractFactory\Elements\SemanticUi\SemanticUiCheckbox;
use App\DesignPatterns\Factories\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{
    /**
     * @return ButtonInterface
     */
    public function buildButton(): ButtonInterface
    {
        return new SemanticUiButton();
    }

    /**
     * @return CheckboxInterface
     */
    public function buildCheckbox(): CheckboxInterface
    {
        return new SemanticUiCheckbox();
    }
}


