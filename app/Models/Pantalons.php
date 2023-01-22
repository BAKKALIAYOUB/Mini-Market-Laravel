<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantalons extends Model
{
    use HasFactory;
    protected $table = "pantalons";
    protected $fillable = ['Id_Produits' , 'Description' , 'URL' , 'Prix'];
    public $timestamps = false;
}
