<?php

return [
    'role_permissions' => [
        'admin' => [
            'dashboard',
            'profile',
            'profile.update',
            'user.create',
            'user.read',
            'user.update',
            'user.delete',
            'student.create',
            'student.read',
            'student.update',
            'student.delete',
            'lecturer.create',
            'lecturer.read',
            'lecturer.update',
            'lecturer.delete',
            'major.create',
            'major.read',
            'major.update',
            'major.delete',
        ],
        'lecturer' => [
            'dashboard',
            'profile',
            'profile.update',
            'major.read',
            'lecturer.read',
            'student.read',
        ],
        'student' => [
            'dashboard',
            'profile',
            'profile.update',
            'major.read',
            'lecturer.read',
            'student.read',
        ],
    ],
];
