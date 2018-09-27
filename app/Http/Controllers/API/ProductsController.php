<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends ConnectionController
{
    /**
    *   @var protected $products
    */
    protected $products;

    /**
    *   CONSTRUCT CONTROLLER
    *
    *   @return void
    */
    public function __construct($products)
    {
        $this->products = $products;
    }
}
