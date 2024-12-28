<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{

    protected $fillable=[
        'uuid',
        "invoice_number",
        'handling_fee',
        'delivery_fee',
        'storage_fee',
        'internal_delivery_fee',
        'insurance_fee',
        'packaging_fee',
        'shipping_fee',
        'source_port_id',
        'destination_port_id'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function container(){
        return $this->hasMany(Container::class);
    }
    public function package(){
        return $this->hasMany(Package::class);
    }

    public function tracking(){
        return $this->hasOne(Tracking::class);
    }



}
