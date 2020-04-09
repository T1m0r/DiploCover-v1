<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            [
                'name' => 'Student',
                'guard_name' => 'student',
            ],
            [
                'name' => 'root',
                'guard_name' => 'student',
            ],
            [
                'name' => 'Employee',
                'guard_name' => 'employee',
            ],
            [
                'name' => 'Company',
                'guard_name' => 'employee',
            ],
            [
                'name' => 'teacher',
                'guard_name' => 'teacher',
            ],
            [
                'name' => 'School',
                'guard_name' => 'teacher',
            ],
            [
                'name' => 'Company.Premium',
                'guard_name' => 'employee',
            ],

        ];

        foreach ($roles as $role) {
            $role = Role::create(['name'=>$role['name'],'guard_name'=>$role['guard_name']]);
        }
    }
}
