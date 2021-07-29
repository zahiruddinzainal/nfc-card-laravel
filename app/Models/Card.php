<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'name',
        'company',
        'title',
        'address',
        'email',
        'phone',
        'web',
        'facebook',
        'twitter',
        'insta',
        'youtube',
        'shopee',

    ];
}
