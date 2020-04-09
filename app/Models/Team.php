<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    //

    use SoftDeletes;
    use CrudTrait;
    //


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'teams';
    protected $primaryKey ='teamID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
    protected $fillable = [
        'teamID', 'tname', 'sID','memberc','teachID',
    ];
    protected $hidden = [
        'pswd', 'remember_token',
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
    public function DA(){

        return $this->belongsTo('App\Models\DA', 'teamID');

    }

    public function members(){

        return $this->belongsTo('App\Models\Student', 'teamID','teamID');

    }

    public function student(){

        return $this->belongsTo('App\Models\Student', 'sID','sID');

    }

    public function teacher(){

        return $this->belongsTo('App\Models\Teacher', 'teachID','teachID');

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
