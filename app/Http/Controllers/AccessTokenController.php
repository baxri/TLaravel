<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;

class AccessTokenController extends Controller
{
    public function create( User $user ){

        $token = $user->createToken('Token Name')->accessToken;

        return response()->json(array(
            'access_ttoken' => $token
        ));
    }
}
