<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $who who
@property datetime $time time
@property varchar $table_name table name
@property varchar $operation operation
@property varchar $key_value key value

 */
class Log extends Model
{

    /**
    * Database table name
    */
    protected $table = 'logs';

    /**
    * Mass assignable columns
    */
    protected $fillable=['key_value',
'who',
'time',
'table_name',
'operation',
'key_value'];

    /**
    * Date time columns.
    */
    protected $dates=['time'];


    public $timestamps = false;


}
