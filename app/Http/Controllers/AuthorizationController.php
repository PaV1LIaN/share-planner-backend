<?php

namespace App\Http\Controllers;

use App\Services\AuthorizationService;

use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    protected AuthorizationService $authorization;
    public function __construct(AuthorizationService $authorization)
    {
       $this->authorization = $authorization;
    }

    public function login(Request $request)
    {
        if ($this->authorization->login($request->input("username"), $request->input("password")) === true)
        {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }
}


