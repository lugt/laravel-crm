<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $ename ename
@property varchar $city city

 */
class Employee extends Model
{

    /**
    * Database table name
    */
    protected $table = 'employees';

    /**
    * Mass assignable columns
    */
    protected $fillable=['city',
'ename',
'city'];

    /**
    * Date time columns.
    */
    protected $dates=[];


    public $timestamps = false;


}
