<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    protected $table = 'majors';

    protected $fillable = [
        'name',
        'code',
        'code_number',
        'description',
    ];
}
