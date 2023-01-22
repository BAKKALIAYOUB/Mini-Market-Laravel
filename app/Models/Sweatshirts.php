<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sweatshirts extends Model
{
    use HasFactory;
    protected $table = "sweatshirts";
    protected $fillable = ['Id_Produits' , 'Description' , 'URL' , 'Prix'];
    public $timestamps = false;
}
