<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\TblcontrolcargaController;
use App\Models\Tblcontrolcarga;

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
    {

        //Comprobar si existe registro en la tabla control de carga
        // $userId = Auth::user()->id;
        // $u =count(Tblcontrolcarga::where('id_Usuario', '=', $userId)->firstOrFail());
         
        // if( $u == null){
            
        //     dd('if');
        // }else{
        //     dd('else');
        // } 

        return view('home');
    }
}
