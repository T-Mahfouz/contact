<?php

namespace Mahfouz\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Mahfouz\Contact\Mail\ContactMailable;
use Mahfouz\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::index');
    }
    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->username,$request->message));
        Contact::create($request->all());
        return redirect()->route('contact-view');
    }
}
