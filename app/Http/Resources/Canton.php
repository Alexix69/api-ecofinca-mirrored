<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use function Symfony\Component\Translation\t;
use App\Http\Resources\Parroquia as ParroquiaResource;

class Canton extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->nombre,
            'provincia_id' => $this->provincia->id,
            'provincia_name' => $this->provincia->nombre,
            'parroquias' => new ParroquiaCollection($this->parroquias)
        ];
    }
}
