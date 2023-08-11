<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [//This is the data that can be stored in the database from the table
        'name',
        'phone_number',
        'email',
        'Age'
    ];
}
