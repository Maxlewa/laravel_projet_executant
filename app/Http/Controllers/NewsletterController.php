<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request){
        request()->validate([
            "email" => ["required", "email"],
        ]);
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();

        Mail::to($request->email)->send(new MailSender($request));

        return view('home');
    }
}
