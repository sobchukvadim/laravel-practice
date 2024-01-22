<?php

namespace App\Http\Resources\Truck;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class TruckResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
        ];
    }
}
