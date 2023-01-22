<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sacs extends Model
{
    use HasFactory;
    protected $table = "sacs";
    protected $fillable = ['Id_Produits' , 'Description' , 'URL' , 'Prix'];
    public $timestamps = false;
}
