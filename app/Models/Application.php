<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    //

    //
    use SoftDeletes;
    //use CrudTrait;



    //


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    //protected $table = 'd_as';
    protected $fillable = [
        'applID', 'daID', 'sID','teamID','appl_ip_address'
    ];
    protected $primaryKey ='applID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
    public $timestamps = true;
    //protected $hidden = ['remember_token',];
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
    public function DA(){

        return $this->belongsTo('App\Models\DA', 'daID','DAid');

    }

    public function Student(){

        return $this->belongsTo('App\Models\Student', 'sID');

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
