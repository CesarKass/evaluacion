@extends('layouts.app')

@section('template_title')
    Tblconfiguracioncarga
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
                                Config de cargas 
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tblconfiguracioncargas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Id Configuracion Carga</th>
										<th>Proporcion</th>
										<th>Diferencia</th>
										<th>Anio</th>
										<th>Activo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblconfiguracioncargas as $tblconfiguracioncarga)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblconfiguracioncarga->id_Configuracion_Carga }}</td>
											<td>{{ $tblconfiguracioncarga->proporcion }}</td>
											<td>{{ $tblconfiguracioncarga->diferencia }}</td>
											<td>{{ $tblconfiguracioncarga->anio }}</td>
											<td>{{ $tblconfiguracioncarga->activo }}</td>

                                            <td>
                                                <form action="{{ route('tblconfiguracioncargas.destroy',$tblconfiguracioncarga->id_Configuracion_Carga) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tblconfiguracioncargas.show',$tblconfiguracioncarga->id_Configuracion_Carga) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tblconfiguracioncargas.edit',$tblconfiguracioncarga->id_Configuracion_Carga) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblconfiguracioncargas->links() !!}
            </div>
        </div>
    </div>
@endsection
