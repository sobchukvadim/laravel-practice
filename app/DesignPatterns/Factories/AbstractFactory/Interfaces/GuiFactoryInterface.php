<?php

namespace App\DesignPatterns\Factories\AbstractFactory\Interfaces;

interface GuiFactoryInterface
{
    public function buildButton();

    public function buildCheckbox();
}
