<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackagePhoto extends Model
{
    protected $fillable=[
        'image_path'
    ];
    public function packagePhoto(){
        return $this->belongsTo(Package::class);
    }
}
