<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $fillable = [
        'name',
        'country',
    ];

    public function container(){
        return $this->hasMany(Container::class);
    }

}
