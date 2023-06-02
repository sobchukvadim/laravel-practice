<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Elements\SemanticUi;

use App\DesignPatterns\Factories\AbstractFactory\Elements\ButtonInterface;

class SemanticUiButton implements ButtonInterface
{
    /**
     * @return string
     */
    public function draw(): string
    {
        return __CLASS__;
    }
}
