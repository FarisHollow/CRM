<?php

// namespace App\Actions\Fortify;

// use App\Models\Admin;
// use App\Models\Employee;

// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Rule;
// use Laravel\Fortify\Contracts\CreatesNewUsers;

// class CreateNewUser extends CreatesNewUsers
// {
//     use PasswordValidationRules;



//     // Add an index method to display the registration form
//     public function index()
//     {
//         return view('auth.register'); // Assuming your registration form is in resources/views/auth/register.blade.php
//     }
    
//     public function create( $input)
//     {

       

//         $role = $input['role'];


        
//         if ($role === 'admin') {

//             Validator::make($input, [
//                 'name' => ['required', 'string', 'max:255'],
//                 'email' => [
//                     'required',
//                     'string',
//                     'email',
//                     'max:255',
//                     Rule::unique(User::class),
//                 ],
//                 'password' => $this->passwordRules(),
//             ])->validate();

//              Admin::create([
//                 'name' => $input['name'],
//                 'email' => $input['email'],
//                 'password' => Hash::make($input['password']),
//                 'designation' => $input['designation'],
//                 'role' => $input['role']
//             ]);
//         } elseif ($role === 'employee') {

//             Validator::make($input, [
//                 'name' => ['required', 'string', 'max:255'],
//                 'email' => [
//                     'required',
//                     'string',
//                     'email',
//                     'max:255',
//                     Rule::unique(User::class),
//                 ],
//                 'password' => $this->passwordRules(),
//             ])->validate();

//              Employee::create([
//                 'name' => $input['name'],
//                 'email' => $input['email'],
//                 'password' => Hash::make($input['password']),
//                 'designation' => $input['designation'],
//                 'role' => $input['role']
//             ]);
//         }
//         return redirect()->route('login'); 

        
//     }

// }
