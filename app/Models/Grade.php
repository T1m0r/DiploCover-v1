<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use SoftDeletes;
    use CrudTrait;


    //


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'grades';
    protected $fillable = [
        'gradeID', 'schoolID', 'name','teachID', 'students', 'token',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $primaryKey ='gradeID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
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

    public function teacher(){
        return $this->belongsTo('App\Models\Teacher','teachID');

    }
    public function students(){
        return $this->belongsTo('App\Models\Student','gradeID','gradeID');

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
