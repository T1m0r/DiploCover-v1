<?php

use App\Models\stud_profile;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sid = Hash::make('Jakob Kreutner');
        $st = new Student();
        $st->sID = $sid;
        $st->scode = Hash::make(random_bytes(5));
        $st->title = 'Admin';
        $st->name = 'Jakob Kreutner';
        $st->firstname = "Jakob";
        $st->lastname = 'Kreutner';
        $st->phonenumber= '06642243216';
        $st->schoolID = '!1!';
        $st->gradeID = '!1!';
        $st->status = 1;
        $st->email = 'jkreutner@tsn.at';
        $st->password = Hash::make('diplocover.jdk');
        $st->remember_token =Hash::make(random_bytes(5));
        $st->activated = 1;
        $st->token =Hash::make(random_bytes(5));
        $st->created_at = Carbon::now();
        $st->updated_at = Carbon::now();
        $st->save();
        $st->assignRole('root');
        $stpf = new stud_profile();
        $stpf->sID = $sid;
        $stpf->laston = Carbon::now();
        $stpf->created_at = Carbon::now();
        $stpf->updated_at = Carbon::now();
        $stpf->save();
    }
}
