<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{


    public function index()
    {
        $leads = Lead::all();
    
           if(auth()->user()->role === 'admin'){

               return view('Admin.admin_lead', ['leads' => $leads]);

           }elseif(auth()->user()->role === 'employee'){

            return view('Employee.employee_lead', ['leads' => $leads]);
           }
        
        }

           


    public function myLeads()
{
    $userLeads = auth()->user()->leads;

    return view('Employee.my_leads', ['userLeads' => $userLeads]);
}



    // Store a newly created lead in the database
    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'cl_name' => 'required|string|max:255',
            'called_at' => 'required|date',
            'sell_rate' => 'required|numeric',
            'company_name' => 'required|string|max:255',
            'd_date' => 'required|date',
        ];

        // Define custom error messages (optional)
        $customMessages = [
            'called_at.required' => 'The called at field is required.',
            // Add custom error messages for other fields as needed.
        ];

        // Validate the incoming request with the defined rules and messages
        $validatedData = $request->validate($rules, $customMessages);

        // If validation fails, it will automatically redirect back with errors.
        // If validation passes, $validatedData will contain the validated input.

        $lead = new Lead();
        $lead->cl_name = $validatedData['cl_name'];
        $lead->called_at = $validatedData['called_at'];
        $lead->sell_rate = $validatedData['sell_rate'];
        $lead->company_name = $validatedData['company_name'];
        $lead->d_date = $validatedData['d_date'];
        $lead->user_id = auth()->user()->id;
        $lead->save();

        return redirect()->route('e-dashboard');
    }
}

