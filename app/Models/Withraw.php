<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withraw extends Model
{
    use HasFactory;

    protected $table = 'withraw';

    protected $primaryKey = 'id';

    protected $fillable = [
        'statue',
    ];

    public $timestamps = true;
}
