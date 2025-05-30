<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['nom', 'prenom', 'date_naissance'];

    public function evaluations() {
    return $this->belongsToMany(Evaluation::class)->withPivot('note');
}
}
