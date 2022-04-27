<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

use Illuminate\Bus\Queueable;


class SendMessage extends Notification
{
    use Queueable;

    private static $toMailCallback;

    public function via($notifiable){
        return['mail'];
    }

    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->subject(Lang::get('new contact.'))
            ->line(Lang::get('To start exploring the academia App, please confirm your email address.'))
            ->line(Lang::get('If you did not create an account, no further action is required.'));
    }
}

