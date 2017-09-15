<?php

namespace codev;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='administrador';
    protected $fillable=['id','NOM_ADM','PAT_ADM,','MAT_ADM','DIR_ADM','CI_ADM','TEL_ADM','NIVEL_ADM'];
    protected $hidden=[''];
}
