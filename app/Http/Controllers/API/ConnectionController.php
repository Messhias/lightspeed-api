<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConnectionController extends Controller
{
    /**
    *   @var protected
    */
    protected $api;

    /**
    *   Conection controller using seoshopphp api
    *
    *   @return JSON
    */
    public function __construct($api = 'test')
    {
        $this->api = $api;
    }

    public function get()
    {
        return $this->api;
    }
}
