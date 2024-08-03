<?php

namespace App\Http\Controllers\PublicPart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    protected string $_path = 'public-part.auth.';

    public function auth(): View{
        return view($this->_path . 'auth');
    }
    public function authenticate(Request $request){
        try{
            if(!$request->email) return back()->with('message', __('Molimo unesite Vaš email!'));
            if(!$request->password) return back()->with('message', __('Molimo unesite Vašu šifru!'));

//            dd($request->all());
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                // Ovdje ćemo redirect uraditi na admin panel

                return redirect()->route('public-part.home');
            }

            return back()->with('message', __('Neispravni korisnički podaci!'));
        }catch (\Exception $e){
            return back()->with('message', __('Desila se greška!'));
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('public-part.home');
    }
}
