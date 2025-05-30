<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    public function etudiants() {
    return $this->belongsToMany(Etudiant::class)->withPivot('note');
}
}
