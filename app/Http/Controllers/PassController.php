<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassController extends Controller
{
    Public function GetPass(){
        return view('QrInventory/passparameters');
    }
}
