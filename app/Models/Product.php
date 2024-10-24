<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected maens it allowa the user to make more products without any restrictions
    protected $fillable = ["name", "description","price"];
}
