<?php 

namespace App\Services;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;



class CarService
{
	public function storeCarService($request){
		try{
			$filteredRequest = array_slice($request, 0, 17);
			$car = Car::create($filteredRequest);
			if(array_key_exists('car_images',$request)){
				foreach($request['car_images'] as $carImage){
					$ImageFolderPath = public_path('app-assets/car-images');
					if (!file_exists($ImageFolderPath))
					{
						mkdir($ImageFolderPath, 0777, true);
					}
					$imageName = time() .  '_' . Str::random(10) .'.' . $carImage->getClientOriginalExtension();
					$carImage->move($ImageFolderPath, $imageName);
					$image_url = url(('app-assets/car-images/').'/'.$imageName);
					CarImage::create([
						'car_id' => $car->id,
						'image_path' => $image_url
					]);
					
				}
			}
		}catch(\Exception $e){
			throw $e;
		}
	}

	public function updateCarService($request,$id){
		$car = Car::where('id',$id)->first();
		$filteredRequest = array_slice($request, 0, 17);
		$car->update($filteredRequest);
		if(array_key_exists('car_images_new',$request)){
			foreach($request['car_images_new'] as $car_image){
				$ImageFolderPath = public_path('app-assets/car-images');
				$image_url = storeImage($car_image,$ImageFolderPath);
				CarImage::create([
					'car_id' => $car->id,
					'image_path' => $image_url
				]);
			}
		}
		if(array_key_exists('car_images',$request)){
			foreach($request['car_images'] as $key=>$value){
				$car_image = CarImage::where('id',$key)->first();
					$path = $car_image->image_path;
					$urlParts = parse_url($path);
					$localPath = trim($urlParts['path'], '/');
					if (File::exists(public_path($localPath))) {
						File::delete(public_path($localPath));
					} 
					$ImageFolderPath = public_path('app-assets/car-images');
					$image_url = storeImage($value,$ImageFolderPath);
						$car_image->update([
							'image_path'=> $image_url
						]);
				
			}
		}
	}
}