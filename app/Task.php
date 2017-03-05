<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Task extends Model
{
    protected $fillable = [
        'name', 'description', 'slug',
        'created_by', 'percentage_completion'
    ];

    //Accessors
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    //Mutators
    public function setNameAttribute($value)
    {
        $name = strtolower($value);
        $this->attributes['name'] = strtolower($name);

        //set the slug
        $this->attributes['slug'] = str_slug($name, '-');

        //set the created by attribute
        $this->attributes['created_by'] = Auth::id();
    }

    //set created by value
    public function setCreatedByAttribute()
    {

    }

    //Binding Configurations
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relationships
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function creator()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

}
