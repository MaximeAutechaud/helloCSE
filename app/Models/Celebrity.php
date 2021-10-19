<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Celebrity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'celebrities';

    protected $fillable = [
        'firstname',
        'lastname',
        'image',
        'description'
    ];

}
