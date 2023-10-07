<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VendorNotification extends Notification
{
    use Queueable;

    private $boothNumber;

    /**
     * Create a new notification instance.
     */

    public function __construct($boothNumber)
    {
        $this->boothNumber = $boothNumber;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Trade-Fair Vendor Registration")
            ->greeting("Hi, $notifiable->first_name,")
            ->line("You have successfully completed the vendor registration for blah trade fair coming up on blah blah blah!")
            ->line("Your unique booth number is $this->boothNumber")
            ->line('Thank you for joining us!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
