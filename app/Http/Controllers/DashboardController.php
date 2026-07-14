<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Major;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['sessions'] = DB::table('sessions')->select([
            'sessions.last_activity',
            'users.name',
            'users.email',
            'users.role',
        ])->join('users', 'users.id', '=', 'sessions.user_id')->limit(10)->get();

        $data['total_users'] = User::count();
        $data['total_majors'] = Major::count();
        $data['total_lecturers'] = Lecturer::count();
        $data['total_students'] = Student::count();

        $data['total_pending_students'] = User::where('role', 'student')->whereDoesntHave('student')->count();
        $data['total_pending_lecturers'] = User::where('role', 'lecturer')->whereDoesntHave('lecturer')->count();

        return view('dashboard', $data);
    }
}
