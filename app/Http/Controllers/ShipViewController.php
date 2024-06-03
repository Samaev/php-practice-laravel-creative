<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipViewController extends Controller
{
    public function index()
    {
        return view('shipment');

    }
}
