<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WiningOption extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
