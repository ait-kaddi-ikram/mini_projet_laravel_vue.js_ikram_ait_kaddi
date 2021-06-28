<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Salle extends JsonResource
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
            'num_salle' => $this-> num_salle,
        ];
    }
}
