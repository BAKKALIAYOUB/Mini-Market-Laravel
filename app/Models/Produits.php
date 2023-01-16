<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;
    protected $table = "produits";
    protected $fillable = ['Description' , 'URL' , 'Prix'];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
