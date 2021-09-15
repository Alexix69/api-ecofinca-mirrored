<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{

    protected $token;

    public function __construct($resource, $token = null)
    {
        parent::__construct($resource);
        $this->token = $token;
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $parroquia = $this->parroquia;
        $canton = $parroquia->canton;
        $provincia = $canton->provincia;

        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'address' => $this->address,
            'parroquia' => $parroquia->nombre,
            'canton' => $canton->nombre,
            'provincia' => $provincia->nombre,
            'image' => $this->image,
            'token' => $this->when($this->token, $this->token),
            'organization_type' => $this->organization_type,
            'description' => $this->description,
            'role' => $this->role
        ];
    }
}
