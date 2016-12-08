<?php 

namespace App\Shops;

/**
* @author Richard Grey richard@web100.co.uk
*/

use App\Product;
use GuzzleHttp\Client;
use App\ExceptionHandler;
use GuzzleHttp\Exception\BadResponseException;

/**
* Shopify implementation of ShopInterface
*/  

class ShopifyShop implements ShopInterface 
{
	private $api_key;
	private $password;
	private $shared_secret;
	private $shopify_shop;

	/**
	* run the config function
	*/  

	public function __construct()
	{
		$this->config();
	}

	/**
	* Get the product and save it
	*
	* @param Product $product
	*/

	public function save(Product $product)
	{
		$product_array = $product->getAsArray();

		$this->saveProduct($product_array);
	}

	/**
	* Get the products from the shop
	*
	* @return array
	*/  

	public function getProducts()
	{
		/**
		* todo
		*/  
	}

	/**
	* Build the Shopify url an make the post request
	*
	* @param array $product
	*/  

	protected function saveProduct(array $product)
	{
		$url = $this->buildUrl('products.json');

		$this->makePostRequest($url, $product);
	}

	/**
	* Sends a curl post request using Guzzle.
	*
	* @param string $url
	* @param array $payload
	*/  

	protected function makePostRequest($url, array $payload)
	{
		$client = new Client;
	
		try {

			$client->post($url, ['json' => $payload]);

		} catch (BadResponseException $e) {

			ExceptionHandler::handle($e);
		}
		
	}

	/**
	* Build the shopify url using the api key, passord and the resource to be accessed
	*
	* @return string
	*/  

	private function buildUrl($resource)
	{
		return 'https://'. $this->api_key . ':' . $this->password . '@' . $this->shopify_shop . '.myshopify.com/admin/' . $resource;
	}

	/**
	* Set the config params for the keys etc using the data saved in the .env file
	*/  

	private function config()
	{
		$this->api_key = getenv('SHOPIFY_APIKEY');
		$this->password = getenv('SHOPIFY_PASSWORD');
		$this->shared_secret = getenv('SHOPIFY_SHARED_SECRET');
		$this->shopify_shop = getenv('SHOPIFY_SHOP');
	}

}