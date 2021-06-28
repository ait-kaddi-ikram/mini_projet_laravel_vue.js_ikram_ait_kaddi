<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Module extends JsonResource
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
            'id'=>$this->id,'nom'=>$this->nom, 'semestre'=>$this->semestre, 'id_prof'=>$this->id_prof
                ];
    }
}
