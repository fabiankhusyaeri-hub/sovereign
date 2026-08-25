<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AppointmentStatusUpdated;

class AdminController extends Controller
{
    // Halaman Utama Admin Dashboard
    public function index()
    {
        $appointments = DB::table('appointments')
            ->orderBy('created_at', 'desc')
            ->get();

        $totalPending   = DB::table('appointments')->where('status', 'Pending')->count();
        $totalApproved  = DB::table('appointments')->where('status', 'Approved')->count();
        $totalCompleted = DB::table('appointments')->where('status', 'Completed')->count();

        return view('admin.dashboard', compact('appointments', 'totalPending', 'totalApproved', 'totalCompleted'));
    }

    // Update Status + Auto Send Email Notification
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Approved,Completed,Cancelled',
        ]);

        // 1. Update status di database
        DB::table('appointments')
            ->where('id', $id)
            ->update([
                'status'     => $request->status,
                'updated_at' => now(),
            ]);

        // 2. Ambil data appointment yang baru diupdate
        $appointment = DB::table('appointments')->where('id', $id)->first();

        // 3. Kirim Email Notifikasi Otomatis ke Pelanggan
        if ($appointment && $appointment->email) {
            Notification::route('mail', $appointment->email)
                ->notify(new AppointmentStatusUpdated($appointment));
        }

        return redirect()->back()->with('success', 'Status janji temu berhasil diperbarui & email konfirmasi telah dikirim ke pelanggan!');
    }

    // Hapus Data
    public function destroy($id)
    {
        DB::table('appointments')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Data janji temu berhasil dihapus.');
    }
}