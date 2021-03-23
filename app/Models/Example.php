<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    public function examples()
    {
        return $this->belongsTo('App\Models\Example_Titles');
    }
}
