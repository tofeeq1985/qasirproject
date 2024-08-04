<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Single_propertyController extends Controller
{
    public function showSinglePeoperty(String $id){
      $decryptedId = Crypt::decrypt($id);

      $property_features= DB::table('properties')
    ->join('property_features', 'properties.pf_ID', '=', 'property_features.id')
    ->where('properties.id', $decryptedId) 
    ->first();
      return view('properties-single' , compact('property_features'));
    }
}
