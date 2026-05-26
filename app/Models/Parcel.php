<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Parcel extends Model
{
    
    protected $fillable = [
        'tracking_id', 'sender_name', 'receiver_name', 'receiver_email', 
        'delivery_address', 'weight', 'cost', 'status', 
        'current_location', 'latitude', 'longitude', 'status_description'
    ];


    protected static function boot() {
        parent::boot();
        static::creating(function ($parcel) {
            $parcel->tracking_id = 'AJD-' . strtoupper(Str::random(4)) . '-' . rand(1000, 9999);
        });
    }


    public function logs() {
        return $this->hasMany(ParcelLog::class)->latest();
    }


}
