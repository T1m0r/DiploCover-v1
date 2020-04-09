<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Teacher extends Authenticatable
{
    //
    use Notifiable;
    use SoftDeletes;
    use HasRoles;
    use CrudTrait;
    //


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'teachers';
    protected $primaryKey = 'teachID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
    protected $guard_name = 'teacher';
    // protected $guarded = ['id'];
    protected $fillable = [
        'teachID', 'sregistercode', 'title','name','firstname','lastname','phonenumber','schoolID','gradeID','email','profpic','abme','intres','roleID','status',
    ];
    protected $hidden = [
        'password', 'remember_token','activated','token',
    ];
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
    public function Grade(){
        return $this->belongsTo('App\Models\Grade', 'teachID','teachID');
    }
    public function School(){
        return $this->belongsTo('App\Models\School', 'schoolID','schoolID');
    }
    public function DA(){
        return $this->belongsTo('App\Models\DA', 'teachID','teachID');
    }
    public function team(){

        return $this->belongsTo('App\Models\Team', 'teachID');

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
