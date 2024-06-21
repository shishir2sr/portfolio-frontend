<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatIDo extends Model
{
    use HasFactory;

    protected $fillable = ['title','topic_name','description','icon']; 
}
