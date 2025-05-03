<?php

namespace App\Http\Controllers;

use App\Mail\CustomerMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.service');
    }

    public function project() {
        return view('pages.project');
    }

    public function send(Request $request) {

         // Validate form data
         $data = $request -> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('yeboahs324@gmail.com') -> send(new CustomerMail($data));
        return redirect() -> back();
    }
}
