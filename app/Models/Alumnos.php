<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    //use HasFactory;
    protected $table = "alumnos";
    protected $fillable = ['Id', 'Cod', 'Name','Career', 'State', 'Created_at', 'updated_at'];
}