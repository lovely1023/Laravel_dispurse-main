<?php

namespace App\Mail;

use App\Models\SurveyRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSurveyRequestNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(protected SurveyRequest $surveyRequest)
    {}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject("New Survey Request on Dispurse")
            ->markdown('emails.admin.new-survey-notification', ['survey' => $this->surveyRequest]);
    }
}
