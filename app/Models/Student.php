<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Backpack\CRUD\CrudTrait;

class Student extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'students';
    protected $primaryKey = 'sID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
    protected $guard_name = 'student';
    // protected $guarded = ['id'];
    protected $fillable = ['sID', 'scode', 'title', 'name','firstname','lastname','phonenumber','schoolID','gradeID',
        'teamID','roleID','status','email','password','activated','token','signup_ip_address','signup_confirmation_ip_address','signup_sm_ip_address','last_ip','updated_ip_address','deleted_ip_address'];
    protected $hidden = ['password','remember_token','activated'];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function schoolb(){

        return $this->belongsTo('App\Models\School', 'schoolID');

    }
    public function team(){

        return $this->belongsTo('App\Models\Team', 'teamID','teamID');

    }
    public function DA(){

        return $this->belongsTo('App\Models\DA', 'sID');

    }
    public function stprof(){
        return $this->belongsTo('App\Models\stud_profile', 'sID');
    }
    public function school(){
        return $this->belongsTo('App\Models\School', 'schoolID');
    }

    public function gradename(){
        return $this->belongsTo('App\Models\Grade','gradeID');

    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
