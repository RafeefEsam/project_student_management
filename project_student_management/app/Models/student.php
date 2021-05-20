<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $fillable = array ('sname','class','phnum','email','password',);
    use HasFactory;
}
