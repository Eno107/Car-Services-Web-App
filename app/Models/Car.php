<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function make()
    {
        return $this->belongsTo(Make::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
