<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'user_id',
        'major_id',
        'nim',
        'email',
        'name',
        'phone',
        'place_of_birth',
        'birth_date',
        'gender',
        'address',
        'academic_year',
        'term',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
