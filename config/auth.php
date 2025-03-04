<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'student',
        'passwords' => 'students',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'employee' => [
            'driver' => 'session',
            'provider' => 'employees',
        ],
        'emp-api' => [
            'driver' => 'token',
            'provider' => 'employees',
        ],
        'teacher' => [
            'driver' => 'session',
            'provider' => 'tchs',
        ],
        'tch-api' => [
            'driver' => 'token',
            'provider' => 'tchs',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'roots',
        ],
        'admin-api' => [
            'driver' => 'token',
            'provider' => 'roots',
        ],

        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
        'stud-api' => [
            'driver' => 'token',
            'provider' => 'students',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        /*'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],*/

        'students' => [
            'driver' => 'eloquent',
            'model' => App\Models\Student::class,
        ],
        'roots' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'employees' => [
            'driver' => 'eloquent',
            'model' => App\Models\Employee::class,
        ],
        'comps' => [
            'driver' => 'eloquent',
            'model' => App\Models\Company::class,
        ],
        'tchs' => [
            'driver' => 'eloquent',
            'model' => App\Models\Teacher::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'students' => [
            'provider' => 'students',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'employees' => [
            'provider' => 'employees',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'teachers' => [
            'provider' => 'tchs',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
