<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pfe extends JsonResource
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
            'id'=>$this->id,
            'sujet' =>$this->sujet,
            'date_pfe'=>$this->date_pfe,
            'id_etudiant'=>$this->id_etudiant,
            'id_prof'=>$this->id_prof,
        ];
    }
}
