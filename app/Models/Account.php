<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'commission_earning';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
