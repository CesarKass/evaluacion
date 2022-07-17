<?php

namespace App\Http\Controllers;

use App\Models\Tblsolicitude;
use App\Models\User;
use App\Models\Tblgrupossistema;
use Illuminate\Http\Request;


use App\Http\Controllers\TblbitacoraController;
use App\Http\Controllers\TblcontrolcargaController;

/**
 * Class TblsolicitudeController
 * @package App\Http\Controllers
 */
class TblsolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblsolicitudes = Tblsolicitude::paginate();
        TblbitacoraController::registrarBitacora(null, 4, 'consulto la tabla solicitudes');
        return view('tblsolicitude.index', compact('tblsolicitudes'))
            ->with('i', (request()->input('page', 1) - 1) * $tblsolicitudes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblsolicitude = new Tblsolicitude(); 
        
        $sys = Tblgrupossistema::where('cve_grupo_sistema', '=','1')->firstOrFail();
        $users = User::where('cve_grupo', '=', $sys->cve_grupo_sistema)->get();
        // dd($user);

        return view('tblsolicitude.create', compact('tblsolicitude','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $data = request()->all(); 

        $uID = TblcontrolcargaController::cargaSolicitudes();

        $arrData = 
        array(
            'id_solicitud' => null,
            // 'id_Usuario_Asignado' => $data['id_Usuario_Asignado'],
            'id_Usuario_Asignado' => $uID,
            'nombre_Solicitante' => $data['nombre_Solicitante'],
            'paterno_Solicitante' => $data['paterno_Solicitante'],
            'materno_Solicitante' => $data['materno_Solicitante'], 
            'fecha_Solicitud' => date('Y-m-d H:i:s'),
            'activo' => 1
        );
        Tblsolicitude::insert($arrData);

        
        TblbitacoraController::registrarBitacora(null, 1, 'inserto en la tabla solicitudes');

        return redirect()->route('tblsolicitudes.index')
            ->with('success', 'Solicitud Agregada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $tblsolicitude = Tblsolicitude::find($id);
        $tblsolicitude = Tblsolicitude::where('id_solicitud', '=', $id)->firstOrFail(); 
  
        TblbitacoraController::registrarBitacora(null, 4, 'observo en la tabla solicitudes el registro '.$id);


        return view('tblsolicitude.show', compact('tblsolicitude'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tblsolicitude = Tblsolicitude::where('id_solicitud', '=', $id)->firstOrFail();
        
        $sys = Tblgrupossistema::where('descripcion_grupo', '=','Asesor de ventas')->firstOrFail();
        $users = User::where('cve_grupo', '=', $sys->cve_grupo_sistema)->get(); 
        return view('tblsolicitude.edit', compact('tblsolicitude','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tblsolicitude $tblsolicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $data = request()->all();
        $data1 = 
        array(  
            'id_Usuario_Asignado' => $data['id_Usuario_Asignado'],
            'nombre_Solicitante' => $data['nombre_Solicitante'],
            'paterno_Solicitante' => $data['paterno_Solicitante'],
            'materno_Solicitante' => $data['materno_Solicitante'], 
            'fecha_Solicitud' => date('Y-m-d H:i:s'),
            'activo' => $data['activo']
        ); 

        Tblsolicitude::where('id_solicitud','=',  $id)->update($data1);

        TblbitacoraController::registrarBitacora(null, 3, 'modifico la tabla solicitudes el registro '.$id);

        return redirect()->route('tblsolicitudes.index')
            ->with('success', 'Solicitud Modificada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        
        $tblgrupossistema = Tblsolicitude::where('id_solicitud', '=', $id)->delete();
        TblbitacoraController::registrarBitacora(null, 3, 'borro en la tabla solicitudes el registro '.$id);

        return redirect()->route('tblsolicitudes.index')
            ->with('success', 'Solicitud borrada');
    }

    public function cancelSoli(Request $request, $id)
    { 
        $data = request()->all();
        $data1 = 
        array(   
            'activo' => 0
        ); 
        Tblsolicitude::where('id_solicitud','=',  $id)->update($data1);

        $uID = TblcontrolcargaController::cargaSolicitudesActualizar();

        return redirect()->route('tblsolicitudes.index')
            ->with('success', 'Solicitud cancelada');
    }
}
