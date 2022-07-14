<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    //
    public function create($name) {
        $flight = new Flight();
        $flight->name = $name;
        $flight->destinition = "IRAN";
        $flight->save();
    }    

    public function showFlight(int $id) {
        $flight = Flight::find($id);
        if ($flight) {
            dump($flight);
        } else {
            dump("flight does not exists anymore");
        }
         
    }

    public function updateFlight($id,$name) {
        $flight = Flight::find($id);
        if ($flight) {
            $flight->name = $name;
            $flight->save();
        }
        dump("done");
    }

    public function deleteFlight($id) {
        $flight = Flight::find($id);
        if ($flight) {
            $flight->delete();
        }
        dump($flight . " has been deleted");
    }

    // dependency injection
    public function sayHi(Request $request) {
        dump($request->getUri());
        dump($request::class);
    }
}
