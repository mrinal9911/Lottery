<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'email'    => 'required|email',
                'password' => 'required',
            ]
        );
        if ($validated->fails())
            return validationError($validated);
        try {
            $mUser = new User();
            $user  = $mUser->getUserByEmail($request->email);
            if (!$user)
                return redirect('/login')->with('error', 'Account does not exist !!!');

            // if ($user->suspended == true)
            //     throw new Exception("You are not authorized to log in!");
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('my-app-token')->plainTextToken;

                $data['token'] = $token;
                $data['userDetails'] = $user;
                return redirect('/admin/lottery-results')->with('success', 'You have Logged In Successfully');
            }
        } catch (Exception $e) {
            return redirect('/login')->with('error', 'There was an error sending your message: ' . $e->getMessage());
        }
    }

    public function result()
    {
        return view('result');
    }

    public function resultSummary()
    {
        return view('result-summary');
    }
}
