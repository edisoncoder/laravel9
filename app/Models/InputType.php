<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function launches()
    {
        return $this->hasMany(Launch::class);
    }

}
