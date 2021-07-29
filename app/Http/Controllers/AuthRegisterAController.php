<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthRegisterAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super');
        $this->adminModel = config('multiauth.models.admin');
        $this->roleModel  = config('multiauth.models.role');
    }
    public function  test(Request $request)
    {
        echo $request;
    }
}
