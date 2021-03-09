<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'expense';

    protected $fillable =[
        'user_id',
        'sub_categorie_id',
        'amount',
        'date',
        'note',
    ];
}
