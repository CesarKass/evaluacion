@extends('layouts.app')

@section('template_title')
    Tblsolicitude
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Solicitudes
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tblsolicitudes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  Crear nueva solicitud
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
                                        
										<th>Id Solicitud</th>
										<th>Id Usuario Asignado</th>
										<th>Nombre Solicitante</th>
										<th>Paterno Solicitante</th>
										<th>Materno Solicitante</th>
										<th>Activo</th>
										<th>Fecha Solicitud</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblsolicitudes as $tblsolicitude)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblsolicitude->id_solicitud }}</td>
											<td>{{ $tblsolicitude->id_Usuario_Asignado }}</td>
											<td>{{ $tblsolicitude->nombre_Solicitante }}</td>
											<td>{{ $tblsolicitude->paterno_Solicitante }}</td>
											<td>{{ $tblsolicitude->materno_Solicitante }}</td>
                                            @if($tblsolicitude->activo == 1)
											<td>Activo</td>
                                            @endif
                                            @if($tblsolicitude->activo == 0)
											<td>Cancelada</td>
                                            @endif
											<td>{{ $tblsolicitude->fecha_Solicitud}}</td>

                                            <td>
                                                <form action="{{ route('tblsolicitudes.destroy',$tblsolicitude->id_solicitud) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tblsolicitudes.show',$tblsolicitude->id_solicitud) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tblsolicitudes.edit',$tblsolicitude->id_solicitud) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    <a class="btn btn-sm btn-warning" href="{{ url('cancelSoli/'.$tblsolicitude->id_solicitud) }}"><i class="fa fa-fw fa-edit"></i> Cancelar</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblsolicitudes->links() !!}
            </div>
        </div>
    </div>
@endsection
