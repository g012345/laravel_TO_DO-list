<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $reviews = new Contact();
        return view("note/index", ["reviews" => $reviews->all()]);
    }

    public function edit()
    {
        return view('note/edit');
    }

    public function create()
    {
        return view('note/create');
    }

}
