<?php

namespace App\Http\Controllers;

use App\Models\Tblbitacora;
use App\Models\tblacciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class TblbitacoraController
 * @package App\Http\Controllers
 */
class TblbitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $tblbitacoras = Tblbitacora::paginate();

        return view('tblbitacora.index', compact('tblbitacoras'))
            ->with('i', (request()->input('page', 1) - 1) * $tblbitacoras->perPage());
    }

    public function registrarBitacora($id, $accion, $mov){
         
        $userId = Auth::user()->id;
        $userName = Auth::user()->nombre;

        $arrEmpleado = 
        array(
            'id_Bitacora' => null,
            'id_Usuario' => $userId,
            'cve_accion' => $accion,
            'fecha' => date('Y-m-d H:i:s'),
            'movimiento' => $userName.' - '.$mov 
        );
        Tblbitacora::insert($arrEmpleado);
    }

}
