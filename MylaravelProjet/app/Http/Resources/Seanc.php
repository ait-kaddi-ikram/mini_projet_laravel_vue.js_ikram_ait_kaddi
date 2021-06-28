<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Seanc extends JsonResource
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
            'jour' => $this->jour,
            'heure_debut' => $this->heure_debut,
            'heure_fin' => $this->heure_fin,
            'id_module' => $this->id_module,
            'num_salle' => $this->num_salle,
        ];
    }
}
