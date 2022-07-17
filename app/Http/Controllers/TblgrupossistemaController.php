<?php

namespace App\Http\Controllers;

use App\Models\Tblgrupossistema;
use Illuminate\Http\Request;
use DB; 

/**
 * Class TblgrupossistemaController
 * @package App\Http\Controllers
 */
class TblgrupossistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblgrupossistemas = Tblgrupossistema::paginate();

        return view('tblgrupossistema.index', compact('tblgrupossistemas'))
            ->with('i', (request()->input('page', 1) - 1) * $tblgrupossistemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tblgrupossistema = new Tblgrupossistema();
        return view('tblgrupossistema.create', compact('tblgrupossistema'));
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
        $arrEmpleado = 
        array(
            'cve_grupo_sistema' => $data['cve_grupo_sistema'],
            'descripcion_grupo' => $data['descripcion_grupo'],
            'activo' => $data['activo']
        );
        Tblgrupossistema::insert($arrEmpleado);

        return redirect()->route('tblgrupossistemas.index')
            ->with('success', 'Tblgrupossistema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $tblgrupossistema = Tblgrupossistema::find($id);
        // $tblgrupossistema = Tblgrupossistema::where('cve_grupo_sistema', $id)->get();
        $tblgrupossistema = Tblgrupossistema::where('cve_grupo_sistema', '=', $id)->firstOrFail();
        return view('tblgrupossistema.show', compact('tblgrupossistema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $tblgrupossistema = Tblgrupossistema::where('cve_grupo_sistema', '=', $id)->firstOrFail();
        return view('tblgrupossistema.edit', compact('tblgrupossistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tblgrupossistema $tblgrupossistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $data = request()->all();
        $data1 = 
        array( 
            'descripcion_grupo' => $data['descripcion_grupo'],
            'activo' => $data['activo']
        ); 
        Tblgrupossistema::where('cve_grupo_sistema','=',  $id)->update($data1);

        return redirect()->route('tblgrupossistemas.index')
            ->with('success', 'Tblgrupossistema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tblgrupossistema = Tblgrupossistema::where('cve_grupo_sistema', '=', $id)->delete();
        
        return redirect()->route('tblgrupossistemas.index')
            ->with('success', 'Tblgrupossistema deleted successfully');
    }
}
