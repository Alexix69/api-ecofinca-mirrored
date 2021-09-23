<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Parroquia extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->nombre,
            'canton' => $this->canton->id,
            'canton_name' => $this->canton->nombre,
        ];
    }
}
