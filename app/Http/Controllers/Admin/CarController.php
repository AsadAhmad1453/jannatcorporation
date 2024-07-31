<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Company;
use App\Services\CarService;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    protected $carService;

	public function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}

    public function cars()
    {
        $cars = Car::OrderBy('id','desc')->get();
        return view('admin.cars.cars',get_defined_vars());
    }

    public function uploadCar()
    {
        $companies = Company::where('status','1')->get();
        return view('admin.cars.uploadcar',get_defined_vars());
    }

    public function editCar($id)
    {
       $car = Car::where('id',$id)->with('images')->first();
       $companies = Company::where('status','1')->get();
       return view('admin.cars.edit-car',get_defined_vars());
    }

    public function updateCar(CarRequest $request,$id)
    {
        $validatedRequest = $request->validated();
        try{
            $this->carService->updateCarService($validatedRequest,$id);
            return redirect()->route('admin.car.list')->with('success','Car Updated Successfully');
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    public function storeCar(CarRequest $request)
    {
        $validatedRequest = $request->validated();
        try{
            $this->carService->storeCarService($validatedRequest);
            return redirect()->route('admin.car.list')->with('success','Car Uploaded Successfully');
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
       
    }

    public function deleteCar($id)
    {
        try{
            $car_images = CarImage::where('car_id',$id)->get();
            if($car_images){
                foreach($car_images as $car_image){
                    $path = $car_image->image_path;
                    $urlParts = parse_url($path);
                    $localPath = trim($urlParts['path'], '/');
                    if (File::exists(public_path($localPath))) {
                        File::delete(public_path($localPath));
                    } 
                }
            }
            Car::findOrFail($id)->delete();
            return back()->with('success','Car Deleted Successfully');
           
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    public function deleteImage($id)
    {
        $car_image = CarImage::where('id',$id)->first();
        $path = $car_image->image_path;
        $urlParts = parse_url($path);
        $localPath = trim($urlParts['path'], '/');
        if (File::exists(public_path($localPath))) {
            File::delete(public_path($localPath));
        } 
        $car_image->delete();
    }
}
