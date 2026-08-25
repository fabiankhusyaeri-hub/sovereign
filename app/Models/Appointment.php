<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'phone',
        'email',
        'watch_model',
        'showroom_location',
        'appointment_date',
        'appointment_time',
        'notes',
        'status',
    ];

    // Hubungkan dengan model User jika pengunjung dalam keadaan login
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}