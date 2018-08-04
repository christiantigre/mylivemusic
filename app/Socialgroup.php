<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialgroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'socialgroups';

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
    protected $fillable = ['sc_link', 'sc_redsocial', 'group_id'];

    public function Group()
    {
        return $this->belongsTo('App\Group');
    }
    
}
