<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
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

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function problems()
    {
        return $this->belongsToMany(Problem::class);
    }
}
