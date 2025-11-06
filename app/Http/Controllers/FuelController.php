<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    public function index () {
        //összes adat lekérdezést, majd a fő nézetnek átadása
        $fuelDatas = Fuel::orderBy('date', 'desc')->get();
        return view('public.main', compact('fuelDatas'));
    }

    public function store (Request $request) {
        //a validált adatokat feltöltöm az adatbázisba és
        //visszairányítok a nézetbe és sikeres vagy hibaüzenettel
        $validated = $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'quantity' => 'required|numeric|min:0',
            'km' => 'required|numeric|min:0.1',
            'money' => 'required|numeric|min:0',
        ]);

        $consumptionData = ($validated['quantity'] / $validated['km']) * 100;

        try {
            $fuelData = new Fuel();
            $fuelData->date = $validated['date'];
            $fuelData->name = $validated['name'];
            $fuelData->quantity = $validated['quantity'];
            $fuelData->km = $validated['km'];
            $fuelData->consumption = round($consumptionData, 1);
            $fuelData->money = $validated['money'];
            $fuelData->save();

        return back()->with('storeFuel', 'Sikeres adatrögzítés');
        } catch (\Exception $e) {
            return back()->withErrors([
                'storeFuel' => 'Hiba az adatok feltöltése közben: ' . $e->getMessage(),
            ]);
        }
    }

    public function destroy ($id) {
        //a megadott id alapján megtalálja a rekodot amit töröl is
        try {
            $fuelData = Fuel::findOrFail($id);
            $fuelData->delete();

            return back()->with('deleteFuel', 'Sikeres törlés!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'deleteFuel' => 'Hiba az adatok törlése közben: ' . $e->getMessage(),
            ]);
        }
    }

    public function show ($id) {
        $fuelData = Fuel::findOrFail($id);
        $fuelDatas = Fuel::orderBy('date', 'desc')->get();

        return view('public.main', [
            'fuelDatas' => $fuelDatas,
            'editFuel' => $fuelData,
        ]);
    }

    public function update (Request $request, $id) {
        //validálja a beérkező adatokat
        $validated = $request->validate([
            'date' => 'required|date',
            'name' => 'required|string',
            'quantity' => 'required|numeric|min:0',
            'km' => 'required|numeric|min:0.1',
            'money' => 'required|numeric|min:0',
        ]);

        //kiszámolja az átlagfogyasztást
        $consumptionData = ($validated['quantity'] / $validated['km']) * 100;

        //megkeresi id alapján a módosítani kívánt rekodot és eltárolja egy változóban
        //beilleszti a módosított adatokat a megfelelő mezőkbe
        //és visszamenti az adatbázisba
        try {
            $fuelData = Fuel::findOrFail($id);
            $fuelData->date = $validated['date'];
            $fuelData->name = $validated['name'];
            $fuelData->quantity = $validated['quantity'];
            $fuelData->km = $validated['km'];
            $fuelData->consumption = round($consumptionData, 1);
            $fuelData->money = $validated['money'];
            $fuelData->save();

        //majd visszairányít a főoldalra '/'
        return redirect()->route('fuel.index')->with('updateFuel', 'Sikeres adatmódosítás');
        } catch (\Exception $e) {
            return back()->withErrors([
                'updateFuel' => 'Hiba az adatok módosítása közben: ' . $e->getMessage(),
            ]);
        }
    }
}
