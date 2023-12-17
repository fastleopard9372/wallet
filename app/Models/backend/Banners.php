<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'status',
    ];
}
