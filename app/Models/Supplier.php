<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $sname sname
@property varchar $city city
@property char $telephone_no telephone no
@property \Illuminate\Database\Eloquent\Collection $product belongsToMany

 */
class Supplier extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'sid';

    /**
    * Database table name
    */
    protected $table = 'suppliers';

    /**
    * Mass assignable columns
    */
    protected $fillable=['telephone_no',
'sname',
'city',
'telephone_no'];

    /**
    * Date time columns.
    */
    protected $dates=[];

    /**
    * products
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function product()
    {
        return $this->belongsToMany(Product::class, 'product');
    }



}
