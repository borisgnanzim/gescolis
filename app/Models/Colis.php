<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colis extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $fillable = ['designation_colis','poids_colis','volume_colis','nom_expediteur','image_colis','client_id'];
}