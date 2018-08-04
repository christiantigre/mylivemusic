<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'members';

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
    protected $fillable = ['mb_name', 'mb_nickname', 'gr_birthdar', 'gr_mail', 'gr_phone', 'gr_cellphone', 'gr_instrument', 'gr_avathar', 'gr_phrase', 'gr_about', 'active', 'group_id'];

    public function Group()
    {
        return $this->belongsTo('App\Group');
    }
    
}
