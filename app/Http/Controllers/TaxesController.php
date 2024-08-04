<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tax;
use App\Models\resident;
use App\Models\resident_tax;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class TaxesController extends Controller
{
    public function showTaxes()
    {
        $taxes = tax::all();
        return view('pay-taxes', compact('taxes'));
    }
    public function sendTax(Request $req)
    {
        $messages = [
            'name.required' => "please provide your family code to get the guardian information",
            'tax.not_in' => "Please provide the tax you want to pay",
            'persons.not_in' => 'Please provide the limit of persons you want to pay tax for.',
            'persons.numeric' => 'Please provide the limit of persons in only numbers.',
            'message.required' => 'Please enter your message.',
            'message.max' => 'The maximun length of message is 255 characters.'
        ];
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'tax' => 'required|not_in:Select Tax',
            'persons' => 'required|not_in:Select Person',
            'message' => 'required|max:255',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $family_code = resident::where('phone_number', $req->phone)->value('family_code');
            $resident_tax = new resident_tax();
            $resident_tax->family_code = $family_code;
            $resident_tax->name = $req->name;
            $resident_tax->phone_number = $req->phone;
            $resident_tax->address = $req->address;
            $resident_tax->tax_name = $req->tax;
            $resident_tax->tax_amount = $req->dollars;
            $resident_tax->persons = $req->persons;
            $resident_tax->total_tax = $req->total_tax;
            $resident_tax->message = $req->message;
            $resident_tax->save();
            return response()->json(['success'=>"Your data has been successfully sent to our authority. Please collect your challan copy from the council office to submit the challan on time."]);        
        }
    }
    public function searchResident(Request $req)
    {
        $messages = [
            'family_code.required' => 'Please provide your family code.',
            'family_code.digits' => 'Family code must be contain only 4 digits',
        ];
        $validator = Validator::make($req->all(), [
            'family_code' => 'required|digits:4',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            $resident_data = resident::where('family_code', $req->family_code)->get();
            if (!$resident_data->isEmpty()) {
                $response = [
                    'status' => 'success',
                    'resident_data' => $resident_data
                ];
            } else {
                $response = [
                    'status' => 'failed',
                    'message' => 'This family code is not registered in our authority. '
                ];
            }
            return response()->json($response);
        }
    }
    public function showTax(Request $req)
    {
        $taxes_row = tax::where('tax_name', $req->selected_value_key)->get();
        $response = [
            'taxes_row_key' => $taxes_row
        ];
        return response()->json($response);
    }
}
