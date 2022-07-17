@extends('layouts.app')

@section('template_title')
    {{ $tblsolicitude->name ?? 'Show Tblsolicitude' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tblsolicitude</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tblsolicitudes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Solicitud:</strong>
                            {{ $tblsolicitude->id_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario Asignado:</strong>
                            {{ $tblsolicitude->id_Usuario_Asignado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Solicitante:</strong>
                            {{ $tblsolicitude->nombre_Solicitante }}
                        </div>
                        <div class="form-group">
                            <strong>Paterno Solicitante:</strong>
                            {{ $tblsolicitude->paterno_Solicitante }}
                        </div>
                        <div class="form-group">
                            <strong>Materno Solicitante:</strong>
                            {{ $tblsolicitude->materno_Solicitante }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $tblsolicitude->activo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Solicitud:</strong>
                            {{ $tblsolicitude->fecha_Solicitud }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
