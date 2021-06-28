<?php

namespace App\Models;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
       'email',
       'mot_Passe',
       'nom',
       'prenom',
       
        ];

        public function getModule() 
{ 
    return $this->hasMany(Module::class); 
}
}
