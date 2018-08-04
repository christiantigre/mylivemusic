<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'summers';

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
    protected $fillable = ['sm_time', 'sm_price', 'active', 'group_id', 'typepresentation_id'];

    public function Typepresentation()
    {
        return $this->belongsTo('App\Typepresentation');
    }
    
}
