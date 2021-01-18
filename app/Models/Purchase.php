<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $cid cid
@property varchar $eid eid
@property varchar $pid pid
@property int $qty qty
@property datetime $ptime ptime
@property decimal $total_price total price

 */
class Purchase extends Model
{

    /**
    * Database table name
    */
    protected $table = 'purchases';

    /**
    * Mass assignable columns
    */
    protected $fillable=['total_price',
'cid',
'eid',
'pid',
'qty',
'ptime',
'total_price'];

    /**
    * Date time columns.
    */
    protected $dates=['ptime'];


    public $timestamps = false;


}
