<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $cname cname
@property varchar $city city
@property int $visits_made visits made
@property datetime $last_visit_time last visit time

 */
class Customer extends Model
{

    /**
    * Database table name
    */
    protected $table = 'customers';

    /**
    * Mass assignable columns
    */
    protected $fillable=['last_visit_time',
'cname',
'city',
'visits_made',
'last_visit_time'];

    /**
    * Date time columns.
    */
    protected $dates=['last_visit_time'];


    public $timestamps = false;


}
