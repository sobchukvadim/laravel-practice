<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Elements;

interface ButtonInterface
{
    /**
     * @return string
     */
    public function draw(): string;
}
