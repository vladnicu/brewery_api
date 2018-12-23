<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\RegisterRequest;
use App\User;
use App\Transformers\UserTransformer;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->toArray();
    }
}