<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    //use HasFactory;
    protected $table = "career";
    protected $fillable = ['Id', 'Name', 'State', 'Created_at', 'updated_at'];
}
