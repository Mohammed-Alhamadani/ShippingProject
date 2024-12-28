<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=[
        'full_name',
        'email',
        'phone_number',
        'address',
        'country',
        'job_title',
        'shipping_mark',
        'email'

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

        public function user(){
        return $this->belongsTo(User::class);
    }


}
