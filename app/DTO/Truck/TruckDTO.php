<?php

namespace App\DTO\Truck;

use App\DTO\BaseDTO;

class TruckDTO extends BaseDTO
{
    public ?string $fedEx_tractor_num = null;
    public ?int $status = null;
    public ?string $comment = null;
}
