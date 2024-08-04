<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;
use Illuminate\Support\Facades\Validator;


class ComplaintController extends Controller
{
    public function sendcomplaint(Request $req)
    {

        $messages = [
            'name.required' => 'Please provide your name.',
            'name.string' => 'Name could not be contain any number or special character',
            'name.max' => 'The maximun length of name is 255 characters.',
            'email.required' => 'Please provide your email address.',
            'email.email' => 'Please provide valid email address',
            'subject.required' => 'Please provide subject of your complaint.',
            'subject.max' => 'The maximun length of subject is 255 characters.',
            'complaint.required' => 'Please provide your complaint.',
            'complaint.max' => 'The maximun length of complaint is 255 characters.'
        ];
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'complaint' => 'required|max:255',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $complaint = new complaint();
            $complaint->name = $req->name;
            $complaint->email = $req->email;
            $complaint->subject = $req->subject;
            $complaint->complaint = $req->complaint;
            $complaint->save();
            return response()->json(['success' => 'Complaint has been sent succesfully to the authority']);
        }
    }
}
