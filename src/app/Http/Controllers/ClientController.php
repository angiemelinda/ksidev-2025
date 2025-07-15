<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $data = Client::get();
        $responseData = [
            'messege' => 'success',
            'data' => $data,
        ];
        
        return response()->json(['data' => $responseData]);
    }
}
