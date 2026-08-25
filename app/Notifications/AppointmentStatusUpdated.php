<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentStatusUpdated extends Notification
{
    use Queueable;

    protected $appointment;

    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $status = $this->appointment->status;
        $name   = $this->appointment->full_name;
        $watch  = $this->appointment->watch_model;
        $date   = date('d M Y', strtotime($this->appointment->appointment_date));
        $time   = $this->appointment->appointment_time;
        $loc    = $this->appointment->showroom_location;

        $mail = (new MailMessage)
            ->subject("SOVEREIGN Concierge — Updates for Your Appointment (#{$this->appointment->id})")
            ->greeting("Dear {$name},");

        if ($status === 'Approved') {
            $mail->line("We are pleased to inform you that your appointment request for **{$watch}** has been **APPROVED**.")
                 ->line("---")
                 ->line("**Appointment Details:**")
                 ->line("• Showroom: **{$loc}**")
                 ->line("• Date: **{$date}**")
                 ->line("• Time: **{$time}**")
                 ->line("---")
                 ->line("Our Private Concierge team will be expecting your arrival. Please present this email upon entry.")
                 ->action('View Website', url('/'));
        } elseif ($status === 'Cancelled') {
            $mail->line("We regret to inform you that your appointment request for **{$watch}** could not be fulfilled at this time.")
                 ->line("Our team will contact you shortly to reschedule or provide alternative allocation options.")
                 ->action('Contact Support', url('/#contact'));
        } else {
            $mail->line("Your appointment status has been updated to **{$status}**.")
                 ->action('Visit Website', url('/'));
        }

        return $mail->salutation("Warm regards,\nSOVEREIGN Concierge Team");
    }
}