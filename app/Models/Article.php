<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


// lien ket voi migrate articles table
//php artisan make:model Models/Article -m
class Article extends Model
{
    //fillable chi dinh cac field dc luu xuong database
    protected $fillable = [
        'title',
        'content',
    ];
}
