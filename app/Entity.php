<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entities';

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
    protected $fillable = ['en_name', 'en_phone', 'en_cellphone', 'en_mail', 'en_manager', 'en_datestart', 'en_logo', 'en_slogan', 'en_about', 'en_linkwebpage', 'en_socialtwiter', 'en_socialfacebook', 'en_socialInstagram', 'en_socialGoogleplus', 'en_socialLikedIn', 'en_socialYoutube', 'en_copyrigth', 'en_yearEdition', 'active', 'country_id', 'estate_id'
,'en_latitude','en_longitude','en_coordenate','en_mapembed'
];

    public function Estate()
    {
        return $this->belongsTo('App\Estate');
    }
    
}
