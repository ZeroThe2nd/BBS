<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\{
    JsonResponse,
    Request
};

class UserAuthController extends Controller
{
    public function createToken(
        User $user,
        Request $request
    ): JsonResponse {
        $name = (string)$request->input('name', 'My Token');
        $scopes = (array)$request->input('scopes', []);

        return response()->json(
            $user->createToken($name, $scopes)
        );
    }
}
