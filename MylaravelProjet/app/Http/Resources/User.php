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
        return [
            'id'         => $this->id,
            'fonction'   => $this->fonction,
            'email'    => $this->email,
            'email_verified_at' =>$this->email_verified_at,
            'mot_Passe' => $this->mot_Passe,
           
        ];

    }
}
