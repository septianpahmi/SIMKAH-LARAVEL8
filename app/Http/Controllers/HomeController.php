<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Persyaratan;
// use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $data = Pendaftaran::all();
        return view('component.index', compact('data'));
    }


    function logout(){
        Auth::logout();
        return redirect('');
    }
}
