<?php

namespace App\Http\Controllers;

use App\Models\Tblcontrolcarga;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

/**
 * Class TblcontrolcargaController
 * @package App\Http\Controllers
 */
class TblcontrolcargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblcontrolcargas = Tblcontrolcarga::paginate();

        return view('tblcontrolcarga.index', compact('tblcontrolcargas'))
            ->with('i', (request()->input('page', 1) - 1) * $tblcontrolcargas->perPage());
    }

    public function cargaSolicitudes()
    {
        $userId = Auth::user()->id;
        $userName = Auth::user()->nombre;  

        // $tblsolicitude = Tblcontrolcarga::orderBy('total', 'DESC')->firstOrFail(); 

        // dd($tblsolicitude);
        // dd($tblsolicitude);
        // $tblsolicitude = orderBy('id', 'DESC'); 
        if(count(Tblcontrolcarga::all()) > 0){  
            // $tblsolicitude = Tblcontrolcarga::where('id_solicitud', '=', $userId)->orderBy('total', 'DESC')->firstOrFail(); 
            $tblsolicitude = Tblcontrolcarga::orderBy('total', 'asc')->firstOrFail(); 
             

            $data1 = 
            array(  
                // 'id_Control_Carga' => null,
                'id_Usuario' => $tblsolicitude->id_Usuario,
                'anio' => date('Y'), 
                'total' => ((int)$tblsolicitude->total)+1
            ); 

            Tblcontrolcarga::where('id_Control_Carga','=',  $tblsolicitude->id_Control_Carga)->update($data1);

            return $tblsolicitude->id_Usuario;
        }else{ 
            $tblsolicitude = Tblcontrolcarga::orderBy('total', 'DESC')->firstOrFail(); 
            $arr = 
            array(
                'id_Control_Carga' => null,
                'id_Usuario' => $tblsolicitude->id_Usuario,
                'anio' => date('Y'), 
                'total' => 1
            );
            Tblcontrolcarga::insert($arr);

            return $tblsolicitude->id_Usuario;
            // $user = Tblcontrolcarga::where('id_Usuario', '=', $userId)->firstOrFail(); 
        }
        // dd($user);
        // $arrEmpleado = 
        // array(
        //     'id_Bitacora' => null,
        //     'id_Usuario' => $userId,
        //     'cve_accion' => $accion,
        //     'fecha' => date('Y-m-d H:i:s'),
        //     'movimiento' => $userName.' - '.$mov 
        // );
        // Tblbitacora::insert($arrEmpleado);
    }

    public function cargaSolicitudesActualizar()
    {
        $userId = Auth::user()->id;
        $userName = Auth::user()->nombre;  

        // if(count(Tblcontrolcarga::all()) > 0){  
            // $tblsolicitude = Tblcontrolcarga::orderBy('total', 'asc')->firstOrFail(); 
            $tblsolicitude = Tblcontrolcarga::where('id_Usuario', '=', $userId)->firstOrFail();
            $data1 = 
            array(  
                // 'id_Control_Carga' => null,
                'id_Usuario' => $userId,
                'anio' => date('Y'), 
                'total' => ((int)$tblsolicitude->total)-1
            ); 

            Tblcontrolcarga::where('id_Control_Carga','=',  $tblsolicitude->id_Control_Carga)->update($data1);

            return $tblsolicitude->id_Usuario;
        // }else{ 
        //     $tblsolicitude = Tblcontrolcarga::orderBy('total', 'asc')->firstOrFail(); 
        //     $arr = 
        //     array(
        //         'id_Control_Carga' => null,
        //         'id_Usuario' => $tblsolicitude->id_Usuario,
        //         'anio' => date('Y'), 
        //         'total' => 0
        //     );
        //     Tblcontrolcarga::insert($arr);

        //     return $tblsolicitude->id_Usuario;
        // } 
    }

}
