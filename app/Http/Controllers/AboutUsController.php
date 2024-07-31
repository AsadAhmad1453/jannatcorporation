<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutusPage()
    {
        return view('website.aboutus.aboutus');
    }
}
