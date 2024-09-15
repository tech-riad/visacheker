<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function checkStatus()
    {
        return view('frontend.service');
    }

    public function checkPassportStatus(Request $request) {
        $passportNumber = $request->input('passport_number');

        $client = Client::where('passport_number', $passportNumber)->first();

        if ($client === null) {
            return response()->json(['message' => 'No client found']);
        } else{
            return response()->json(['client' => $client]);

        }

    }
}
