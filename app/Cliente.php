<?php

namespace codev;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';//encapsulando por seguridad
    protected $fillable=['id','NOM_CLIE','PAT_CLIE','MAT_CLIE','CI_CLIE','TEL_CLIE'];
    protected $hidden=[''];

}
