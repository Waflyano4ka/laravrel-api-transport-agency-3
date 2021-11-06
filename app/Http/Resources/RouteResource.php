<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RouteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'departure_city' => new CityResource($this->departureСity),
            'arrival_city' => new CityResource($this->arrivalСity),
            'distance' => $this->distance,
            'user' => new UserResource($this->user),
        ];
    }
}
