<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    public function index () {
        $fuelDatas = Fuel::all();
        return view('public.main', compact('fuelDatas'));
    }

    public function store (Request $request) {
        //
    }
}
