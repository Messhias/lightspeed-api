<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends ConnectionController
{
    /**
    * @var protected $user
    */
    protected $user;

    /**
    *   CONSTRUCT METHOD FOR API USER CONTROLLER
    *
    *   @var mixed $user
    *   @return void
    */
    public function __construct($user = "my user")
    {
        $this->user = $user;
    }

    /**
    *   get the user
    *
    *   @return mixed $user
    */
    public function get()
    {
        return $this->user;
    }

}
