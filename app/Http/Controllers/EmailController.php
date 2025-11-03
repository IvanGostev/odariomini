<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        Email::create(['email' => $request->email]);
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        if ($request->password == 'A3nlAv4B6V3wHq') {
            $emails = Email::latest()->get();
            return view('auth', compact('emails'));
        } else {
            return back();
        }
    }
}
