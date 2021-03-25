<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExampleTitle extends Model
{
    public function examples()
    {
        return $this->hasMany('App\Models\Example');
    }
}
