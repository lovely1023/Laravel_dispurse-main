<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormSubmitted;
use Livewire\Component;
use Mail;

class ContactForm extends Component
{
    public $email;
    public $message;
    public $sent = false;

    protected $rules = [
        'email' => 'required|email|max:255',
        'message' => 'required',
    ];

    public function submit()
    {
        $data = $this->validate();

        Mail::to(config('mail.from.address'))
            ->send(new ContactFormSubmitted($data['email'], $data['message']));

        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact-form')
            ->layout('components.form.layout');

    }
}
