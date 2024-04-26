<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'Tel',
        'email',
        'mot_de_passe',
    ];
    protected $hidden = [
        'mot_de_passe',
    ];

    // Mutateur pour hacher le mot de passe automatiquement
    public function setPasswordAttribute($value)
    {
        $this->attributes['mot_de_passe'] = Hash::make($value);
    }
}
