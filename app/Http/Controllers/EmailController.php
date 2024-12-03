<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    
    public function sendEmail() {
        $recipient = 'rrr@techsochss.com';
        $data = ['name' => 'dddp'];

        Mail::to($recipient)->send(new SendEmail($data));

        return response()->json(['message' => 'Email sent successfully to ' . $recipient]);
    }

}
