<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCommittees extends Model
{
    
    /**
     * Get the users for the sub-committee.
     */
    public function users()
    {
        return $this->hasMany('App\Users', 'sub_committee_id');
    }
}
