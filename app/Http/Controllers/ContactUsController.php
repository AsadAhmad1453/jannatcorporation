<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CustomerMessage;

class ContactUsController extends Controller
{
    public function contactusPage($id)
    {
        $car = Car::where('id',$id)->first();
        return view('website.contactus.contactus',get_defined_vars());
    }
    public function sendMessage(Request $request)
    {
        CustomerMessage::create([
            'car_id' => $request->carid,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $request->comments
        ]);
        return response()->json('success');
    }
}
