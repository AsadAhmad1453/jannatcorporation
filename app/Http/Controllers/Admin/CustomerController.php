<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerMessage;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers(){
        $customers = CustomerMessage::with('car')->OrderBy('id','desc')->get();
        return view('admin.customers.customers',get_defined_vars());
    }
    public function deleteCustomer($id)
    {
        CustomerMessage::where('id',$id)->delete();
        return back()->with('success','Message Deleted Successfully');
    }
}
