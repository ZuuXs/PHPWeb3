<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nom extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'age'];
    public $timestamps = false;
}
