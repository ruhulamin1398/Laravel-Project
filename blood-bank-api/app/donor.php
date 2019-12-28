<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class donor extends Model
{
    public function group(){
        return $this->HasOne('App\group');
    }
}
