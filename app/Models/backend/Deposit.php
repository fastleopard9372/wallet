<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $table = "deposits";
    protected $guarded = ["id"];
    protected $fillable = [
        'user_id', 
        'txn_id', 
        'coins', 
        'status',
        'amount_recharge_date' 

    ];
}
