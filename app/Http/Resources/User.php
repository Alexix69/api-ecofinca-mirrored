<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $parroquia = $this->parroquia;
        $canton = $parroquia->canton;
        $provincia = $canton->provincia;

        return [
            'parroquia' => $parroquia->nombre,
            'canton' => $canton->nombre,
            'provincia' => $provincia->nombre
        ];
    }
}
