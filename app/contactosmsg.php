<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactosmsg extends Model
{
    protected $guarded = [];

    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
}
