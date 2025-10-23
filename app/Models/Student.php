<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'address', 'mobile'];
    protected $table = 'students';
    protected $primaryKey = 'id';
    use HasFactory;
}
