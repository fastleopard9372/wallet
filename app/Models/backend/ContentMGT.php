<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentMGT extends Model
{
    use HasFactory;

    protected $table = "contents";
    protected $guarded = ["id"];

    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
