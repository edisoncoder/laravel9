<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congregation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area_id',
        'description',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function launches()
    {
        return $this->hasMany(Launch::class);
    }
}
