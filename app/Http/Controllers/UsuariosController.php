<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\usuarios;

class UsuariosController extends Controller
{
  public function auth(Request $request) {
    try {
      $email = $request->input('email');
      $password = $request->input('password');

     if(Auth::guard('web')->attempt(['email_user' => 'giovanni_soares@aol.com', 'senha_user' => '1234567'])) {
        return redirect()->intended('index');
     }
    } catch (\Throwable $th) {
      return $th;
    }
  }

  public function login() {
    return view('login');
  }

  public function register(Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');

    $pass = Hash::make($password);

    $user = usuarios::create([
      'nome_user' => $name,
      'email_user' => $email,
      'senha_user' => $pass
    ])->save();

    return $user;
  }

  public function registerPage(Request $request) {
    return view('register');
  }
}
