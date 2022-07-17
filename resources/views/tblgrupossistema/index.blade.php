@extends('layouts.app')

@section('template_title')
    Tblgrupossistema
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('home') }}"> Volver a inicio</a>
                            </div>
                            <span id="card_title">
                                Sistemas
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tblgrupossistemas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Crear nuevo sistema
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cve Grupo Sistema</th>
										<th>Descripcion Grupo</th>
										<th>Activo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblgrupossistemas as $tblgrupossistema)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblgrupossistema->cve_grupo_sistema }}</td>
											<td>{{ $tblgrupossistema->descripcion_grupo }}</td>
											<td>{{ $tblgrupossistema->activo }}</td>

                                            <td>
                                                <form action="{{ route('tblgrupossistemas.destroy',$tblgrupossistema->cve_grupo_sistema) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tblgrupossistemas.show',$tblgrupossistema->cve_grupo_sistema) }}"><i class="fa fa-fw fa-eye"></i> Ver sistema</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tblgrupossistemas.edit',$tblgrupossistema->cve_grupo_sistema) }}"><i class="fa fa-fw fa-edit"></i> Editar sistema</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar sistema</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblgrupossistemas->links() !!}
            </div>
        </div>
    </div>
@endsection
