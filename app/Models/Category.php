<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function getNameAttribute($name)
    {
        return ucwords($name);
    }

    public function problems()
    {
        return $this->hasMany(Problem::class);
    }
}
