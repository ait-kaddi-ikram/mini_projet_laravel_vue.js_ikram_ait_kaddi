<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pfe extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'sujet',
        'date_pfe',
        'id_etudiant',
        'id_prof',
        ];
   
}
