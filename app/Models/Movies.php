<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'movieName', 
        'slug', 
        'count',
        'originalName',
        'movieYear',
        'rating',
        'popularity',
        'genres',
        'language',
        'overview',
        'posterPath',
        'backdropPath',
        'trailer',
        'watchLink',
    ];
}
