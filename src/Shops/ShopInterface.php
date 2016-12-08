<?php

namespace App\Shops;

/**
* @author Richard Grey richard@web100.co.uk
*/

use App\Product;

/**
* Extract a shop interface to 
*
* @return snippet
*/  

interface ShopInterface 
{

	public function save(Product $product);

	public function getProducts();

}