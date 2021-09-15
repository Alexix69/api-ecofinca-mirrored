<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Delivery extends JsonResource
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
            'created_at' => $this->created_at->format('d-m-Y'),
            'quantity' => $this->quantity,
            // falta agregar centro de acopio
            'state' => $this->state,
            'user_id' => $this->user_id,
            'provincia' => $this->provincia,
            'canton' => $this->canton,
            'parroquia' => $this->parroquia,
            'for_user_id' => $this->for_user_id
        ];
    }
}
