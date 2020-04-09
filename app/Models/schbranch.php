<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class schbranch extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'id', 'name', 'schoolID','amount'
    ];
    protected $primaryKey = 'id';
    public  $incrementing = true;
    //protected  $keyType = 'String';
}
