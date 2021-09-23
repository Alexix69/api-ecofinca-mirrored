<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;

class Delivery extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $delivery_creator = User::find($this->user_id);
        $delivery_manager = User::find($this->for_user_id);
        return [
            'id' => $this->id,
            'created_at' => $this->created_at->format('d-m-Y'),
            'description' => $this->description,
            'quantity' => $this->quantity,
            'state' => $this->state,
            'user_id' => $this->user_id,
            'provincia' => $this->provincia,
            'canton' => $this->canton,
            'parroquia' => $this->parroquia,
            'for_user_id' => $this->for_user_id,
            'delivery_creator' => $delivery_creator->organization_type,
            'delivery_manager' => $delivery_manager->organization_type,
            'image' => $this->image
        ];
    }
}
