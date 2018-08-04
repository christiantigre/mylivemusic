<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';

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
    protected $fillable = ['gr_name', 'gr_datestart', 'gr_detall', 'gr_slogan', 'gr_logo', 'gr_email', 'gr_about', 'gr_phone', 'gr_cellphone', 'active', 'manager_id','gr_webpage','country_id','estate_id','gr_latitude','gr_longitude','gr_coordenade'];

    public function Manager()
    {
        return $this->belongsTo('App\Manager');
    }
    
}
