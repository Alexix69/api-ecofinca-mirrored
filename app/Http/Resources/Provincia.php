<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Provincia extends JsonResource
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
            //NO ENVIAR AQUI LA LISTA DE CANTONES, HACERLO EN EL CONTROLADOR
//            'cantones' => new CantonCollection($this->cantones)
        ];
    }
}
