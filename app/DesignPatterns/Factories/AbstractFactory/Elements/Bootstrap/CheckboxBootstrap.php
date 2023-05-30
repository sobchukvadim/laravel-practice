<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Elements\Bootstrap;

use App\DesignPatterns\Factories\AbstractFactory\Elements\CheckboxInterface;

class CheckboxBootstrap implements CheckboxInterface
{
    /**
     * @return string
     */
    public function draw(): string
    {
        return __CLASS__;
    }
}
