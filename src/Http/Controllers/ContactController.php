<?php

namespace Ait\Contact\Http\Controllers;

use Ait\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Ait\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index() {
        return view('contact::contact');
    }

    public function send(Request $request) {
        Contact::create($request->all());
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        return redirect(route('contact'));
    }
}
