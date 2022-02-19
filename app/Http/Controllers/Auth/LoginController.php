<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
   
    public function login(Request $request) {
        return view('signin');
    }
   
    public function signin(Request $request) {
        $user = User::where('email', $request->email)->get();
        if (count($user) < 1){
            return view('signin')->with('error', 'this is error');
        }

        $user = Sentinel::findById($user[0]->id);
        if (empty($user)){
            return view('signin')->with('error', 'The user is not registered');
        }

       
        // try {            
        //     if (Sentinel::authenticate($request->only(['email', 'password']), $request->get('remember-me', false))) {
        //         return Redirect::route("student.home")->with('success', 'signin success');
        //     }
            
        //     $this->messageBag->add('email', 'sljlsjlkf');

        // } catch (NotActivatedException $e) {
        //     // $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        // } catch (ThrottlingException $e) {
        //     $delay = $e->getDelay();
        //     // $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        // }
        // return Redirect::back()->withInput()->withErrors($this->messageBag);

        return Redirect::route('home')->with('success', 'signin success!!!');
    }
    
}

