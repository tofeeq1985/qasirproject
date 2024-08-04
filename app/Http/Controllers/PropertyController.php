<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\property;

class PropertyController extends Controller
{
    public function showproperties()
    {
        $properties = property::all();
        return view('properties', compact('properties'));    
    }
}
