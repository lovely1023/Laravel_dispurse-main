<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // $validated = $this->validate($request, [
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'email' => 'required|string|max:255|unique:users,email',
        //     'company_name' => 'required|string|max:255',
        //     'payroll_provider' => 'required|string|max:255',
        // ]);

        // User::create($validated);

        return redirect()->back();
    }
}
