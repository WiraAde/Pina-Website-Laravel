<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function formRegister()
    {
        return view('pengguna.form_register');
    }
    public function simpanRegister(Request $req)
    {
        try {
            $this->validate($req,[
                'nama' => ['required','max:255'],
                'username' => ['required','max:255'],
                'email' => ['required','string','email','unique:pengguna'],
                'password' => ['required','string','min:3']
            ]);

            $datas = $req -> all();
            $savedata = new Pengguna;
            $savedata -> name = $datas ['nama'];
            $savedata -> username = $datas ['username'];
            $savedata -> email = $datas ['email'];
            $savedata -> level = $datas ['level'];
            $savedata -> password = Hash::make($datas['password']);
            $savedata -> save();

            return redirect()->route('register.form-register')->with('success',__('Berhasil Mendaftar'));
        } catch (\Throwable $th) {
            return redirect()->route('register.form-register')->with('error',__($th->getMessage()));
        }
    }
}