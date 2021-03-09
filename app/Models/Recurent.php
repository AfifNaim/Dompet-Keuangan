<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurent extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'recurent';

    protected $fillable =[
        'user_id',
        'sub_categorie_id',
        'amount',
        'date',
        'note',
    ];
}
