<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stud_profile extends Model
{
    //
    protected $fillable = [
        'sID', 'laston', 'aboutme', 'intressts','Stschool','Contact','lebpath','zeugpath','otherpath1','otherpath2','profpic',
    ];
    protected $primaryKey ='sID';
    public  $incrementing = 'false';
    protected  $keyType = 'string';
}
