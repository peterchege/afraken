<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    /**
     * Get the users for the this category.
     */
    public function users()
    {
        return $this->hasMany('App\User', 'category_id');
    }
}
