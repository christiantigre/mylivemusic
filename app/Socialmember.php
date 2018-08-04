<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socialmember extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'socialmembers';

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
    protected $fillable = ['sc_link', 'sc_redsocial', 'active', 'member_id'];

    public function Member()
    {
        return $this->belongsTo('App\Member');
    }
    
}
