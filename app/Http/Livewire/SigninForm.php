<?php

namespace App\Http\Livewire;


use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;
use DB;
use Hash;

class SigninForm extends Component
{
    public $email;
    public $password;
    
    public $flag_signin = false;

    public function submit()
    {
       
        $data = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:15|min:8'
        ]);

        $user = DB::table('users')->where('email', $this->email)->first();
        
        if (empty($user)){
            $this->flag_signin = false;

        }else{
            $password = $user->password;
            $cur_pwd = md5($this->password);
            $this->temp = $cur_pwd;
            if( $password == $cur_pwd){
                $this->flag_signin = true;
            }
            $this->flag_signin = true;
        }

    }

    
    protected $rules = [
        'email' => 'required|email|max:255',
        'password' => 'required|max:15|min:8'
    ];
 
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.signin-form')
        ->layout('components.form.layout');
    }
}
