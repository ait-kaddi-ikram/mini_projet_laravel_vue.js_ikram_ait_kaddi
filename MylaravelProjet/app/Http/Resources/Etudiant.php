<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Etudiant extends JsonResource
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
                'id' =>$this->id,
                'cne' =>$this->cne,
                'email' =>$this->email,
                'mot_Passe' =>$this->mot_Passe,
                'nom' =>$this->nom,
                'prenom' =>$this->prenom,
                'semestre' =>$this->semestre
            ];
        
    }
}
