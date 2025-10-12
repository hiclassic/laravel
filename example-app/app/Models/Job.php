<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // ✅ এই লাইনটা যোগ করো
    protected $fillable = [
        'title',
        'company',
        'location',
        'description',
    ];
}
