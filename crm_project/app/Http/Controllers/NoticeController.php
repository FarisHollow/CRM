<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function permitNotice(Request $request)
    {
        // Check if the checkbox is checked
        $allowViewNoticeBoard = $request->has('view-notice-board');
    
        if ($allowViewNoticeBoard) {
            $notices = Notice::all();
            return view('noticeBoard', ['notices' => $notices]);
        } else {
            return '<p>Not Allowed to see notice</p>';
        }
    }
    


    public function index()
{
    $notices = Notice::all(); 

    return view('noticeBoard', ['notices' => $notices]);
}



    public function view()
    {
       

               return view('Admin.addNotice');

        
        }




     // Store a newly created lead in the database
     public function store(Request $request)
     {
         // Define validation rules
         $rules = [
             'title' => 'required|string|max:255',
             'text' => 'required|string|max:255',
         ];
 
         $validatedData = $request->validate($rules);
        
         $notice = new Notice();
         $notice->title = $validatedData['title'];
         $notice->text = $validatedData['text'];
         $notice->user_id = auth()->user()->id;
         $notice->save();
 
         return redirect()->route('dashboard');
     }
    
}
