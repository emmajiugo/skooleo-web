<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feesetup extends Model
{
    //

    public function feetype() {
        return $this->belongsTo('App\Feetype');
    }

    public function feesbreakdown() {
        return $this->hasMany('App\Feesbreakdown');
    }
}
