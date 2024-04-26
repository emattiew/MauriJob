<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $table = 'cvs'; // Nom de la table

    protected $primaryKey = 'id_cv'; // Clé primaire

    protected $fillable = [
        'id_pos', // Clé étrangère vers le Postulant
        'titre',
        'competences',
        'experience',
        'education',
    ];

    // Définir la relation avec le modèle Postulant
    public function postulant()
    {
        return $this->belongsTo(Postulant::class, 'id_pos', 'id_pos');
    }

    // Méthodes
    public function ajouterCV($data)
    {
        return self::create($data);
    }

    public function modifierCV($data)
    {
        $this->update($data);
    }

}
