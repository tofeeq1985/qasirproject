<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    public function sendcontact(Request $req)
    {

        $messages = [
            'name.required' => 'Please provide your name.',
            'name.string' => 'Name could not be contain any number or special character',
            'name.max' => 'The maximun length of name is 255 characters.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide valid email address',
            'subject.required' => 'Please provide subject of your message.',
            'subject.max' => 'The maximun length of subject is 255 characters.',
            'message.required' => 'Please enter your message.',
            'message.max' => 'The maximun length of message is 255 characters.'
        ];
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required|max:255',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
          $contact = new contact();
          $contact->name = $req->name;
          $contact->email = $req->email;
          $contact->subject = $req->subject;
          $contact->message = $req->message;
          $contact->save();
            return response()->json(['success' => 'Message has been sent succesfully to our authority']);
        }
    }
}
