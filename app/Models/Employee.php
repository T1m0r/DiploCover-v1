<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Employee extends Authenticatable
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



    protected $table = 'employees';
    protected $guard_name = 'employee';

    protected $fillable = [
        'emplID', 'title', 'job','name','firstname','lastname','phonenumber','companyID','roleID','email','password','activated','confirmcode','status','cregistercode'
    ];
    protected $hidden = [
        'password', 'remember_token','activated',
    ];
    protected $primaryKey ='emplID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function company(){

        return $this->belongsTo('App\Models\Company', 'companyID', 'companyID');

    }
    public function da(){

        return $this->belongsTo('App\Models\DA', 'emplID', 'emplID');

    }
    public function daz(){

        return $this->belongsTo('App\Models\Company', 'emplID', 'emplIDz');

    }


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */


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
