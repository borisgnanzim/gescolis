<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionnaire extends Model
{
    use HasFactory;
    public $timestamps = false ;
    protected $fillable = ['nom_gestionnaire'];
}
