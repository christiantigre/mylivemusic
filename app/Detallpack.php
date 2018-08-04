<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallpack extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detallpacks';

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
    protected $fillable = ['item_pack', 'active', 'typepack_id'];

    public function Typepack()
    {
        return $this->belongsTo('App\Typepack');
    }
    
}
