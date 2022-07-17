<?php

namespace App\Http\Controllers;

use App\Models\Tblconfiguracioncarga;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
/**
 * Class TblconfiguracioncargaController
 * @package App\Http\Controllers
 */
class TblconfiguracioncargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblconfiguracioncargas = Tblconfiguracioncarga::paginate();

        return view('tblconfiguracioncarga.index', compact('tblconfiguracioncargas'))
            ->with('i', (request()->input('page', 1) - 1) * $tblconfiguracioncargas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblconfiguracioncarga = new Tblconfiguracioncarga();
        return view('tblconfiguracioncarga.create', compact('tblconfiguracioncarga'));
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
        $userId = Auth::user()->id;
        $userName = Auth::user()->nombre;  

        $arrData = 
        array(
            'id_Configuracion_Carga' => null,
            'proporcion' => $data['proporcion'], 
            'diferencia' => $data['diferencia'],
            'anio' => $data['anio'],
            'activo' => $data['activo'],
        );
        Tblconfiguracioncarga::insert($arrData);

        
        TblbitacoraController::registrarBitacora(null, 1, $userName. ' inserto en la tabla configuracion de cargas');


        return redirect()->route('tblconfiguracioncargas.index')
            ->with('success', 'Tblconfiguracioncarga created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblconfiguracioncarga = Tblconfiguracioncarga::where('id_Configuracion_Carga', '=', $id)->firstOrFail(); 
        return view('tblconfiguracioncarga.show', compact('tblconfiguracioncarga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $tblconfiguracioncarga = Tblconfiguracioncarga::where('id_Configuracion_Carga', '=', $id)->firstOrFail(); 
        return view('tblconfiguracioncarga.edit', compact('tblconfiguracioncarga')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tblconfiguracioncarga $tblconfiguracioncarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->all();
        $arrData = 
        array(
            'id_Configuracion_Carga' => $data['id_Configuracion_Carga'],
            'proporcion' => $data['proporcion'], 
            'diferencia' => $data['diferencia'],
            'anio' => $data['anio'],
            'activo' => $data['activo'],
        );

        Tblconfiguracioncarga::where('id_Configuracion_Carga','=',  $id)->update($arrData);

        TblbitacoraController::registrarBitacora(null, 3, 'modifico la tabla config cargas el registro '.$id);

        return redirect()->route('tblconfiguracioncargas.index')
            ->with('success', 'Tblconfiguracioncarga updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblconfiguracioncarga = Tblconfiguracioncarga::where('id_Configuracion_Carga', '=', $id)->delete();
        TblbitacoraController::registrarBitacora(null, 3, 'borro en la tabla config cargas el registro '.$id);

        return redirect()->route('tblconfiguracioncargas.index')
            ->with('success', 'Tblconfiguracioncarga deleted successfully');
    }
}
