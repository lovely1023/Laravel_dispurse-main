<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

use Hash;

class RegisterForm extends Component
{
    public $first_name;

    public $last_name;

    public $email;

    public $password;

    public $company_name;

    public $payroll_provider = '';

    public $is_employee = '';

    public $created = false;

    public $payrollOptions = [
        'ADP', 'Ceridian', 'Gusto', 'Paychex', 'Paycom', 'Paylocity', 'Other', 'I Don\'t Know'
    ];

    public function submit()
    {
        $data = $this->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|max:15|min:8',
            'company_name' => 'required|max:255',
            'payroll_provider' => ['required','max:255', Rule::in($this->payrollOptions)],
            'is_employee' => 'required|boolean',
        ]);

        $data['password'] = md5($this->password); 


        User::create($data);
        $this->created = true;

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.register-form')
            ->layout('components.form.layout');
    }
}
