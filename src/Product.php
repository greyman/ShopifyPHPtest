<?php

namespace App;

use App\Shops\ShopInterface;

/** 
* The Product class, essentially a DTO for the product to be saved.
*/  

class Product
{	
	private $title;
	private $description;
	private $product_type;
	private $images;
	private $vendor;

	/**
	* Add the product details through the constructor
	*
	* @param string $title
	* @param string $description
	* @param string $product_type
	* @param array $images
	*/  

	public function __construct($title, $description, $product_type, array $images = null)
	{
		$this->title = $title;
		$this->description = $description;
		$this->product_type = $product_type;
		$this->vendor = getenv('SHOPIFY_VENDOR');
		$this->images = $images;
	}

	/**
	* Save the product to an implementation of ShopInterface
	*
	* @param ShopInterface $shop
	*/  

	public function saveToShop(ShopInterface $shop)
	{
		$shop->save($this);
	}

	/**
	* Return an array of the product
	*
	* @return array
	*/  

	public function getAsArray()
	{
		return ["product"=>get_object_vars($this)];
	}	

	public function setImages(array $images)
	{
		$this->images = $images;
	}

}