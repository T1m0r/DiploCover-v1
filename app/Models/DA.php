<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DA extends Model
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
    protected $table = 'd_as';
    protected $fillable = [
        'DAid', 'DAnmae', 'DAdesc','companyID','teamID','sID','tchID','emplID','prog','status'
    ];
    protected $primaryKey ='DAid';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
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
    public function Team(){

        return $this->belongsTo('App\Models\Team', 'teamID');

    }
    public function Phase(){

        return $this->belongsTo('App\Models\DAPhase', 'phase','phaseID');

    }

    public function Teacher(){

        return $this->belongsTo('App\Models\Teacher', 'teachID');

    }

    public function employee(){
        return $this->belongsTo('App\Models\Employee','emplID','emplID');

    }

    public function employeez(){
        return $this->belongsTo('App\Models\Employee','emplIDz','emplID');

    }

    public function empteacher(){
        return $this->belongsTo('App\Models\Teacher','emplID','teachID');

    }
    public function empzteacher(){
        return $this->belongsTo('App\Models\Teacher','emplIDz','teachID');

    }

    public function company(){
        return $this->belongsTo('App\Models\Company','companyID');

    }
    public function school(){
        return $this->belongsTo('App\Models\School','schoolID','schoolID');

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
