<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seanc extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'jour',
        'heure_debut',
        'heure_fin',
        'id_module',
        'num_salle'
                ];
}
