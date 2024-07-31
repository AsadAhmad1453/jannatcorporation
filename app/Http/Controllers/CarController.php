<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function carsPage()
    {
        $cars = Car::with('images','company')->OrderBy('id','desc')->get();
        return view('website.cars.cars',get_defined_vars());
    }

    public function carDetail($id){
        $car = Car::where('id',$id)->with('images','company')->first();
        $sameCars = Car::where('company_id',$car->company_id)->with('images','company')->latest()->take(3)->get();
        return view('website.cars.car-detail',get_defined_vars());
    }
    public function advanceSearch(Request $request){
        $company = $request->input('company');
        $title = $request->input('title');
        $model = $request->input('model');
        $location = $request->input('location');
        $query = Car::query();
        $cars = $query
            ->when($company !== null, function ($query) use ($company){
                $query->where('company_id',$company);
            })
            ->when($title !== null, function ($query) use ($title){
                $query->where('title',$title);
            })
            ->when($model !== null, function ($query) use ($model){
                $query->where('model',$model);
            })
            ->when($location !== null, function ($query) use ($location){
                $query->where('location',$location);
            })->get();

            return response()->json($cars);
    }
}
