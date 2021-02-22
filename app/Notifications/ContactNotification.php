<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactNotification extends Notification
{
    use Queueable;
    private $data;

    public function __construct($data)
    {
        $this->data=$data;
        
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Solicitud de contacto')
            ->line($this->data->nombre . ' quiere contactarse contigo')
            ->line('su telefono es: ' . $this->data->telefono)
            ->line('su correo es: ' . $this->data->correo)
            ->line('Mensaje:')
            ->line($this->data->mensaje);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
