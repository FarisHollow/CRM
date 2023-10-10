<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function store(Request $request)
    {
        $noticeValue = $request->input('notice') === '1' ? true : false;
        $leadValue = $request->input('lead') === '1' ? true : false;

        $permission = Permission::firstOrNew([]);

        $permission->notice = $noticeValue;
        $permission->lead = $leadValue;

        $permission->save();

        return redirect()->route('permission');
    }
}
