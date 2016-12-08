<?php

date_default_timezone_set("UTC");

require __DIR__.'/../vendor/autoload.php';

use App\ProductFactory;
use App\Shops\ShopifyShop;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

$request = Request::createFromGlobals();

$product = ProductFactory::create($request);

$product->saveToShop(new ShopifyShop);

(new RedirectResponse('http://localhost:8000'))->send();