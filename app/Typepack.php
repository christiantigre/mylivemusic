<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typepack extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'typepacks';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pack_type', 'pack_price_suscription','pack_price_month', 'pack_detall', 'active'];

    
}
