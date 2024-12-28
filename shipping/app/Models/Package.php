<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $fillable=[
        'weight',
        'height',
        'width',
        'length',
        'description',
        'quantity',
        'unit_price',
        'invoice',
        'tracking_number',
        'courier',
        'packaging_type',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function shipment(){
        return $this->belongsTo(Shipment::class);
    }

    public function packagePhoto(){
        return $this->hasMany(PackagePhoto::class);
    }

}
