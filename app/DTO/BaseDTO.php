<?php

namespace App\DTO;

use Illuminate\Support\Arr;
use ReflectionClass;

/**
 * DTO implementation
 * @see https://github.com/spatie/data-transfer-object
 */
abstract class BaseDTO
{
    public function __construct(array $args)
    {
        $object = new ReflectionClass($this);

        foreach ($object->getProperties() as $property) {
            $property->setValue($this, Arr::get($args, $property->name, $property->getDefaultValue()));
        }
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $data = [];

        $object = new ReflectionClass(static::class);

        $properties = $object->getProperties();

        foreach ($properties as $property) {
            $value = $property->getValue($this);
            if ($value === null) {
                continue;
            }

            $data[$property->getName()] = $value;
        }

        return $data;
    }
}
