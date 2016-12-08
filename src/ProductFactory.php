<?php

namespace App;

/**
* @author Richard Grey richard@web100.co.uk
*/  

use Symfony\Component\HttpFoundation\Request;

/**
* A factory class to build the product from a Request oject.
*/  

class ProductFactory 
{

	/**
	* Create and return an new Product
	*
	* @param Request $request
	*
	* @return Product 
	*/  

	public static function create(Request $request)
	{
		$images = static::buildImagesArray($request->files->get('images'));

		return new Product(
			$request->request->get('title'),
			$request->request->get('description'),
			$request->request->get('product_type'),
			$images
			);
	}

	public function buildImagesArray(array $images = [])
	{
		if (empty(array_filter($images))) { return null; }

		return array_map(function($image){

			$name = $image->getClientOriginalName();
			$image = file_get_contents($image->getRealPath());

			return ['attachment' => base64_encode($image), 'file_name' => $name];

		}, $images);
	}

}