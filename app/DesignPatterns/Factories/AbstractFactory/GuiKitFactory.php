<?php

namespace App\DesignPatterns\Factories\AbstractFactory;

use App\DesignPatterns\Factories\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Factories\AbstractFactory\Interfaces\GuiFactoryInterface;
use InvalidArgumentException;

class GuiKitFactory
{
    /**
     * @param string $type
     * @return GuiFactoryInterface
     * @throws InvalidArgumentException
     */
    public function getFactory(string $type): GuiFactoryInterface
    {
        return match ($type) {
            'bootstrap' => new BootstrapFactory(),
            default => throw new InvalidArgumentException("Unknown type - [{$type}]"),
        };
    }
}
