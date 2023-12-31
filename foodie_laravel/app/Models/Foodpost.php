<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodpost extends Model
{
    use HasFactory;

    protected $fillable = ['foodsender', 'foodname', 'foodprice','phonenumber','user_id', 'foodimage'];
}
