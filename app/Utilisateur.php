<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable = ['Login','Prenom', 'Nom', 'Date_nais', 'CIN', 'Tel', 'Domicile', 'Email', 'Password', 'token' ];
    
    public $timestamps = false;
}
