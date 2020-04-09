<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Backpack\CRUD\CrudTrait;

class Admin extends Authenticatable
{

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

    protected $table = 'admins';
    protected $primaryKey = 'sID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
    protected $guard_name = 'admin';
    // protected $guarded = ['id'];
    protected $fillable = ['sID', 'scode', 'title', 'name','firstname','lastname','phonenumber',
        'roleID','status','email','password','activated','last_ip','updated_ip_address','deleted_ip_address'];
    protected $hidden = ['remember_token',];
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

    public function stprof(){
        return $this->belongsTo('App\Models\stud_profile', 'sID');
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
