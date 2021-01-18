<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $pname pname
@property int $qoh qoh
@property int $qoh_threshold qoh threshold
@property decimal $original_price original price
@property decimal $discnt_rate discnt rate
@property varchar $sid sid

 */
class Product extends Model
{

    /**
    * Database table name
    */
    protected $table = 'products';

    /**
    * Mass assignable columns
    */
    protected $fillable=['sid',
'pname',
'qoh',
'qoh_threshold',
'original_price',
'discnt_rate',
'sid'];

    /**
    * Date time columns.
    */
    protected $dates=[];


    public $timestamps = false;


}
