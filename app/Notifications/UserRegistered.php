<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class UserRegistered extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if ($notifiable->is_employee) {
            return (new MailMessage)
                ->subject('Welcome to Dispurse!')
                ->greeting('Hi ' . $notifiable->first_name)
                ->line('Thank you for signing up for Dispurse! In order to get you paid in crypto, two things need to happen:')
                ->line('1) Your company implements the Dispurse software')
                ->line('2) You download the Dispurse app')
                ->line('It looks like your company hasn’t implemented the Dispurse software quite yet, so hang tight for now. Once your company has implemented the software, we will email you with credentials to login to the employee side. From there, you will be able to create your Dispurse wallet and manage all of your crypto investments in one place.')
                ->line(new HtmlString('If you are looking to speed up the process of getting your company onboard, send your management team the following <a href="' . route('register') . '">link</a> and ask them to signup for Dispurse on behalf of the organization. Helpful tip: they will need to select the “pay employees in crypto” option in order to do so.'))
                ->line('If you have any questions in the meantime, please reach out to info@dispurseapp.com.')
                ->line('Thanks again for choosing Dispurse!')
                ->salutation('– Dispurse Customer Support Team');
        }

        return (new MailMessage)
            ->subject('Welcome to Dispurse!')
            ->greeting('Hi ' . $notifiable->first_name)
            ->line('Thank you for signing up for Dispurse! In order to get your employees paid in crypto, two things need to happen:')
            ->line('1) Your company implements the Dispurse software')
            ->line('2) Your employees download the Dispurse app')
            ->line('It looks like your company hasn’t implemented the Dispurse software quite yet. No worries – we can get you started in no time! If you are ready to get started with implementation, or simply want to schedule a consultation, please reach out to GetStarted@Dispurseapp.com and provide the best date and time to setup a call.')
            ->line('Once we receive your inquiry, we will be in touch with next steps as soon as possible.')
            ->line('Thanks again for choosing Dispurse!')
            ->salutation('– Dispurse Customer Support Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
