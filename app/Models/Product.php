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
@property Sid $supplier belongsTo
@property \Illuminate\Database\Eloquent\Collection $purchase belongsToMany

 */
class Product extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'pid';

    /**
    * Database table name
    */
    protected $table = 'product';

    /**
    * Mass assignable columns
    */
    protected $fillable=['pname',
'qoh',
'qoh_threshold',
'original_price',
'discnt_rate',
'sid'];

    /**
    * Date time columns.
    */
    protected $dates=[];


    /**
    * sid
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function sid()
    {
        return $this->belongsTo('App\Models\Supplier');
    }

    /**
    * purchases
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function purchases()
    {
        return $this->belongsToMany('App\Models\Purchase','purchases');
    }



}
