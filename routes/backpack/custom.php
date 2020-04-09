<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('school','SchoolCrudController');
    CRUD::resource('teacher','TeacherCrudController');
    CRUD::resource('student','StudentCrudController');
    CRUD::resource('employee','EmployeeCrudController');
    CRUD::resource('company','CompanyCrudController');

    CRUD::resource('admin','AdminCrudController');
    CRUD::resource('da','DACrudController');
    CRUD::resource('grade','GradeCrudController');
    CRUD::resource('idea','IdeaCrudController');
    CRUD::resource('intresst','IntresstCrudController');
    CRUD::resource('team','TeamCrudController');

}); // this should be the absolute last line of this file