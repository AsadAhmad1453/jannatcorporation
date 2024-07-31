<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CustomerMessage;
use App\Models\Company;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $carsCount = Car::count();
        $messageCount = CustomerMessage::count();
        $companyCount = Company::count();
        return view('admin.dashboard.dashboard',get_defined_vars());
    }
}
