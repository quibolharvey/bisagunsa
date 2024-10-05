<?php

// app/Models/Member.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = [
        'name',
        'email',
        'phone',
        'membership_plan',
    ];
}

