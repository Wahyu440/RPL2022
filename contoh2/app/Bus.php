<?php

namespace App;
use App\BusSchedule;
use App\Booking;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'buses';
    protected $fillable = ['bus_name', 'plat_no', 'no_mesin', 'seats', 'bus_image', 'total_seats', 'status', 'pabrik', 'jenis'];
    protected $primaryKey = 'bus_id';

    protected $casts = [
        'seats'  =>  'array',
        // 'seats_avail'   =>  'array'
    ];

    public function schedules()
    {
        return $this->hasMany(BusSchedule::class);
    }
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}