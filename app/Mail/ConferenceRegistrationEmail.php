<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ConferenceRegistration;

class ConferenceRegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;

    /**
     * Create a new message instance.
     */
    public function __construct(ConferenceRegistration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Регистрация на кофнференцию Живи Христом 2025')
                    ->markdown('emails.conference.registration');
    }
}
