<?php

namespace App\DesignPatterns\Factories\AbstractFactory;

use App\DesignPatterns\Factories\AbstractFactory\Enums\GuiKit;
use App\DesignPatterns\Factories\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Factories\AbstractFactory\Factories\SemanticUiFactory;
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
            GuiKit::BOOTSTRAP->value => new BootstrapFactory(),
            GuiKit::SEMANTIC_UI->value => new SemanticUiFactory(),
            default => throw new InvalidArgumentException("Unknown type - [{$type}]"),
        };
    }
}
