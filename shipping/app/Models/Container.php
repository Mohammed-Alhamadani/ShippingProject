<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $fillable = [
        'title',
        'shipment_date',
        'arrival_date',
        'size',
        'cubic_volume',
        'shipping_company',
        'container_number',
        'bill_number'
    ];

    public function port(){
        return $this->belongsTo(Port::class);
    }
    public function shipment(){
        return $this->belongsTo(Shipment::class);
    }


}
