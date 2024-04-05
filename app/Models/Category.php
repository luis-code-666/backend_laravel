<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // belongs es para la llave foranea y has es sin la llave foranea
    protected $guarded = [];
    public function lessons()
    {
        return $this->belongsToMany(lessons::class);
    }
}
