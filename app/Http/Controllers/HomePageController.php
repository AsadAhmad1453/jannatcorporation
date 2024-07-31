<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Company;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage()
    {
        $featuredCars = Car::where('featured','1')->with('images','company')->get();
        $recentCars = Car::orderBy('id', 'desc')->with('images')->take(4)->get();
        $companies = Company::orderBy('id','desc')->get();
        return view('website.hompage.homepage',get_defined_vars());
    }
   
}
