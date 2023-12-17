<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title',
        'company_name',
        'site_email',
        'meta_site_title',
        'meta_description',
        'meta_keywords',
    ];
}
