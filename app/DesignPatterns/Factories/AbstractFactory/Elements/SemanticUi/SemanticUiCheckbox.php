<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Elements\SemanticUi;

use App\DesignPatterns\Factories\AbstractFactory\Elements\CheckboxInterface;

class SemanticUiCheckbox implements CheckboxInterface
{
    /**
     * @return string
     */
    public function draw(): string
    {
        return __CLASS__;
    }
}
