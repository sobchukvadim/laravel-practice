<?php

namespace App\Services\Truck;

use App\Models\Truck;
use App\DTO\Truck\TruckDTO;

class TruckService
{
    /**
     * @param TruckDTO $dto
     * @return Truck
     */
    public function create(TruckDTO $dto): Truck
    {
        return Truck::create($dto->toArray());
    }

    /**
     * @param Truck $truck
     * @param TruckDTO $dto
     * @return bool
     */
    public function update(Truck $truck, TruckDTO $dto): bool
    {
        return $truck->update($dto->toArray());
    }
}
