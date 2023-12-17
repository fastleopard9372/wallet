<?php

namespace App\Models\backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmhouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'images',
        'default_image',
        'status',
    ];
}
