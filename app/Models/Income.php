<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'income';

    protected $fillable =[
        'user_id',
        'sub_categorie_id',
        'amount',
        'date',
        'note',
    ];
}
