<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet_control extends Model
{
    use HasFactory;

    protected $table = 'wallet_control';
    protected $primaryKey = 'id';
    public $timestamps = true;
}