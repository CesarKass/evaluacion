@extends('layouts.app')

@section('template_title')
    Tblbitacora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tblbitacora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tblbitacoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Bitacora</th>
										<th>Id Usuario</th>
										<th>Cve Accion</th>
										<th>Fecha</th>
										<th>Movimiento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblbitacoras as $tblbitacora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tblbitacora->id_Bitacora }}</td>
											<td>{{ $tblbitacora->id_Usuario }}</td>
											<td>{{ $tblbitacora->cve_accion }}</td>
											<td>{{ $tblbitacora->fecha }}</td>
											<td>{{ $tblbitacora->movimiento }}</td>

                                            <td>
                                                <!-- <form action="{{ route('tblbitacoras.destroy',$tblbitacora->id_Bitacora) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tblbitacoras.show',$tblbitacora->id_Bitacora) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tblbitacoras.edit',$tblbitacora->id_Bitacora) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblbitacoras->links() !!}
            </div>
        </div>
    </div>
@endsection
