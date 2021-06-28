<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'note', 
        'id_etudiant',
        'id_module',
      ];
}
