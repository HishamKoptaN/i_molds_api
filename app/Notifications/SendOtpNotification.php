<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class SendOtpNotification extends Notification
{
    use Queueable;

    protected $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('رمز التحقق')
            ->line('رمز التحقق الخاص بك هو: ' . $this->otp)
            ->line('يرجى استخدام هذا الرمز لتأكيد هويتك.')
            ->action('تأكيد', url('/'))
            ->line('شكراً لك!');
    }
}
