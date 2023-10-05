<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index($id){
        $userId = Auth::id();
        $data = Pendaftaran::where('user_id', $userId)->get();
        return view('component.layout.pendaftaran', compact('data'));
    }
    public function generatePDF($id)
    {
        $data = Pendaftaran::find($id);
        $pdf = Pdf::loadView('component.layout.cetak', ['data' => $data]);
        return $pdf->download('nomor pendaftaran.pdf');
    }

}
