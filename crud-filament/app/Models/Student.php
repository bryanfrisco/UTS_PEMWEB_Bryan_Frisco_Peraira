<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // ← ini penting!

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'fakultas'];
}
