<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function store(Request $request)
    {
        // Retrieve the selected values (1 for "Yes," 0 for "No") from the form.
        $noticeValue = $request->input('notice') === '1' ? true : false;
        $leadValue = $request->input('lead') === '1' ? true : false;

        // Find the existing record or create a new one if it doesn't exist.
        $permission = Permission::firstOrNew([]);

        // Update the 'notice' and 'lead' columns of the record with the new boolean values.
        $permission->notice = $noticeValue;
        $permission->lead = $leadValue;

        $permission->save();

        return redirect()->route('permission');
    }
}
