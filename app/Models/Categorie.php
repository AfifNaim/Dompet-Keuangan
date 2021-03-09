<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'categorie';

    protected $fillable =[
        'user_id',
        'categorie_id',
        'name'
    ];

}
