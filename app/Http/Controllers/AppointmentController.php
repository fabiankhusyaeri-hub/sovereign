<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AppointmentStatusUpdated;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'watch_model'       => 'required|string',
            'full_name'         => 'required|string|max:255',
            'phone'             => 'required|string|max:20',
            'email'             => 'required|email|max:255',
            'showroom_location' => 'required|string',
            'appointment_date'  => 'required|date',
            'appointment_time'  => 'required|string',
        ]);

        // Simpan ke Database (User ID otomatis terisi jika user sedang login)
        $appointmentId = DB::table('appointments')->insertGetId([
            'user_id'           => auth()->check() ? auth()->id() : null,
            'full_name'         => $validated['full_name'],
            'phone'             => $validated['phone'],
            'email'             => $validated['email'],
            'watch_model'       => $validated['watch_model'],
            'showroom_location' => $validated['showroom_location'],
            'appointment_date'  => $validated['appointment_date'],
            'appointment_time'  => $validated['appointment_time'],
            'status'            => 'Pending',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        $appointment = DB::table('appointments')->where('id', $appointmentId)->first();

        // Kirim Email Otomatis ke Email Pelanggan
        if ($appointment && $appointment->email) {
            Notification::route('mail', $appointment->email)
                ->notify(new AppointmentStatusUpdated($appointment));
        }

        return redirect()->back()->with('success', 'Appointment request submitted successfully! Please check your email.');
    }
}