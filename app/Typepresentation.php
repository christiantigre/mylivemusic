<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typepresentation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'typepresentations';

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
    protected $fillable = ['pl_presentation', 'detall', 'active'];

    
}
