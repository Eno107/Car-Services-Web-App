<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function makes()
    {
        return $this->belongsToMany(Make::class);
    }

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }
}
