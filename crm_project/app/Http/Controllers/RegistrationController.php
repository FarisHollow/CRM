<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function create(Request $input)
    {
        $role = $input->input('role');

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',                          
            'password' => 'required|string|min:8', 
            'designation' => 'required|string',
        ];

        $modelClass = ($role === 'admin') ? Admin::class : Employee::class; 

        $validatedData = $input->validate($rules);

        $modelClass::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'designation' => $validatedData['designation'],
            'role' => $role,
        ]);

        return redirect()->route('login');
    }
}
