<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Elements;

interface CheckboxInterface
{
    /**
     * @return string
     */
    public function draw(): string;
}
