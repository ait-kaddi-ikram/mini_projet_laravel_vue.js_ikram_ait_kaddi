<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','cne','email','mot_Passe','nom','prenom','semestre'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
