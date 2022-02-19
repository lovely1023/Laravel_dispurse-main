<?php

namespace App\Http\Livewire;

use App\Mail\NewSurveyRequestNotification;
use App\Mail\SurveyInvitation;
use App\Models\SurveyRequest;
use Livewire\Component;
use Mail;

class SurveyForm extends Component
{
    public $name;
    public $email;
    public $company_name;

    public $sent = false;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'company_name' => 'required|string',
    ];

    public function submit()
    {
        $validated = $this->validate();
        $surveyRequest = SurveyRequest::create($validated);
        Mail::to($this->email)->send(new SurveyInvitation($this->name, $this->company_name));
        Mail::to(config('notifications.new_signup_email'))->send(new NewSurveyRequestNotification($surveyRequest));

        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.survey-form');
    }
}
