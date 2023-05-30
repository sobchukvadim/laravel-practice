<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Elements\Bootstrap;

use App\DesignPatterns\Factories\AbstractFactory\Elements\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    /**
     * @return string
     */
    public function draw(): string
    {
        return __CLASS__;
    }
}
