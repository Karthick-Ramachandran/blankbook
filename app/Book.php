<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    // books

    public function description()
    {
        return $this->hasOne('App\Description');
    }
}
