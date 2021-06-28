<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Suit extends JsonResource
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
            'note' => $this->note,
            'id_etudiant' => $this->id_etudiant,
            'id_module' => $this->id_module,
        ];
        
    }
}
