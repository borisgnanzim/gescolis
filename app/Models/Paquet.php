<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquet extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $fillable = ['liste_colis','poids_paquet','volume_paquet','image_paquet'];
}