<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function drinks() {
        return $this->hasMany(Drink::class);
    }

}
