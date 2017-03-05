<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = ['id'];

    /** Accessors */
    public function getDepartmentAttribute($value)
    {
        return ucwords($value);
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
