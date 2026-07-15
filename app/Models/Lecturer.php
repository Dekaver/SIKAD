<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'lecturers';

    protected $fillable = [
        'user_id',
        'major_id',
        'nidn',
        'name',
        'place_of_birth',
        'birth_date',
        'gender',
        'address',
        'email',
        'phone',
    ];

    protected $casts = [
        'birth_date' => 'date'
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
