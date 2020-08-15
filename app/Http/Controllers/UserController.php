<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pertanyaan;
use Carbon\Carbon;

class UserController extends Controller
{
    public function profil(){
        return view('user.profil');
    }

    public function komentar(){
        return view('user.addcomment');
    }

    public function createkomentar(){
        return view('user.addcomment');
    }

    public function pertanyaan(){
        return view('user.addquestion');
    }

    public function createpertanyaan(Request $request){
        $time = Carbon::now()->format('Y-m-d');

        pertanyaan::create([
            'id' => $request->id,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tag' => $request->tag,
            'profil_id' => $request->profil_id,
            'created_at' => $time
        ]);

        return redirect('/user/profil');
    }

}
