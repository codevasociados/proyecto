<?php

namespace codev;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table= 'cliente';
    protected $fillable= ['CI_CLIE', 'MAT_CLIE', 'NOM_CLIE', 'PAT_CLIE', 'TEL_CLIE'];
}
