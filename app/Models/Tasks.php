<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = [
        'tasks_name',
        'description'
    ];
}
