<?php

namespace App\Http\Controllers\Email;

use App\Mail\MailFeedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index() {
        return view('send-email');
    }

    public function sendMail(Request $request) {
        $validation = $request->validate([
            'name' => 'required',
            'feedback' => 'required',
            'email' => 'required|email:dns'
        ]);

        $data = [
            'name' => $request->name,
            'feedback' => $request->feedback
        ];

        Mail::to($request->email)->send(new MailFeedback($data));

        return redirect()->back()->with('success', 'Feedback Successfully Sent');
    }
}
