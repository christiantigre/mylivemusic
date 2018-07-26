<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estates';

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
    protected $fillable = ['estate', 'detall', 'active', 'country_id'];

    public function Country()
    {
        return $this->belongsTo('App\Country');
    }
    
}
