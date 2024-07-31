<?php

use Illuminate\Support\Str;

function storeImage($file ,$path)
{
	if (!file_exists($path))
	{
		mkdir($path, 0777, true);
	}
	$imageName = time() .  '_' . Str::random(10) .'.' . $file->getClientOriginalExtension();
	$file->move($path, $imageName);
	$relativePath = str_replace(public_path(), '', $path);
	$relativePath = str_replace('\\', '/', $relativePath);
	$image_url = $relativePath.'/'.$imageName;
	return $image_url;
	
}