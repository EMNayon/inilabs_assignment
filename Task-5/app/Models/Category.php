<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $fillable = ['name'];
    // // protected $fillable0 = ['age'];
    // protected $fillable1 = ['roll'];
    // protected $fillable2 = ['subject'];
    // protected $fillable3 = ['department'];
    protected $fillable = ['name', 'age', 'roll', 'subject', 'department'];
}
