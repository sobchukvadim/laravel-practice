<?php

namespace App\Enums\Truck;

enum Status: int
{
    case ACTIVE = 1;
    case INACTIVE = 2;
    case TEMP_INACTIVE = 3;
    case PENDING = 4;
}
