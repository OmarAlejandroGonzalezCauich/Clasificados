<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ShowloginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validateLogin($request);

        if(auth::attempt(['name' => $request->email, 'name' => $request->password, 'active' =>1 ])){
            return redirect()->route('main');
        }

        return back()
        ->withErrors(['name' => trans('auth.failed')])
        ->withInput(request(['name']));
    }

    protected function validateLogin(Request $request){
        $this.validate($request, [
            'name' => 'required|string',
            'password' => 'required|string'
        ]);
    }

}
