<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Features\RegistrationFeature;
use Laravel\Fortify\CreateNewUser;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class RegistrationController extends Controller
{

    // Add an index method to display the registration form
    public function index()
    {
        return view('auth.register'); // Assuming your registration form is in resources/views/auth/register.blade.php
    }
    
    public function create(Request $input)
    {
        $role = $input['role'];
        
        if ($role === 'admin') {
            return Admin::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'designation' => $input['designation'],
                'role' => $input['role']
            ]);
        } elseif ($role === 'employee') {
            return Employee::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'designation' => $input['designation'],
                'role' => $input['role']
            ]);
        }
        return redirect()->route('login'); 

        
    }


    
}
