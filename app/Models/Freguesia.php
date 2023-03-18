<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freguesia extends Model
{
    use HasFactory;
    protected $fillable = ['distrito', 'concelho', 'freguesia'];
}
