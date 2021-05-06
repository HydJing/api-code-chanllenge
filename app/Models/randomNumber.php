<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class randomNumber extends Model
{
    use HasFactory;

    protected $fillable = ['uuid', 'number'];
    public $timestamps = false;
}
