<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create_check(Request $request)
    {
        $valid = $request->validate([
            "name_title" => "required|min:1",
            "description_note" => "required|min:1"
        ]);
        $review = new Contact();
        $review->name_info= $request->input("name_title");
        $review->info= $request->input("description_note");

        $review->save();

        return redirect()->route("index");
    }
    public function delete($id)
    {
    $review = Contact::find($id); 
    if ($review) {
        $review->delete(); 
    }

    return redirect()->route('index');
    }
    public function edit($id)
    {
        $review = Contact::find($id);
        return view('note/edit', ['review' => $review]);
    }
    public function update(Request $request, $id)
    {
        $review = Contact::find($id); 
        if ($review) {
            $review->name_info = $request->input("name_title"); 
            $review->info = $request->input("description_note");
            $review->save();
        }
    
        return redirect()->route('index');
    }
    

            
}
