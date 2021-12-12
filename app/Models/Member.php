<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "middle_name",
        "last_name",
        "address",
        "gender",
        "father_name",
        "mother_name",
        "email",
        "contact_number",
        "educational_attainment",
        "current_work",
        "is_voter",
        "precint_number"
    ];
}
