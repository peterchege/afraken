<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the category of the user.
     */
    public function categories()
    {
        return $this->belongsTo('App\Categories', 'category_id');
    }

    /**
    * Get the role of the user.
    */
    public function role()
    {
        return $this->belongsTo('App\Roles', 'role_id');
    }

    /**
     * Get the user that belongs to the sub committee.
     */
    public function subCommittee()
    {
        return $this->belongsTo('App\SubCommittees', 'sub_committee_id');
    }
}
