<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function lecturer()
    {
        return $this->hasOne(Lecturer::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function hasRole(string $role)
    {
        return $this->role === $role;
    }

    // Mengambil daftar permission berdasarkan role user saat ini
    public function permissions(): array
    {
        $matrix = config('permissions.role_permissions', []);

        // Mengembalikan array permission milik role user, atau array kosong jika tidak ketemu
        return $matrix[$this->role] ?? [];
    }

    // Fungsi untuk cek apakah user punya permission tertentu
    public function hasPermission(string $permission): bool
    {
        return in_array($permission, $this->permissions());
    }
}
