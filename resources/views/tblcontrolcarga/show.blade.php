@extends('layouts.app')

@section('template_title')
    {{ $tblcontrolcarga->name ?? 'Show Tblcontrolcarga' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tblcontrolcarga</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tblcontrolcargas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Control Carga:</strong>
                            {{ $tblcontrolcarga->id_Control_Carga }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $tblcontrolcarga->id_Usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Anio:</strong>
                            {{ $tblcontrolcarga->anio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $tblcontrolcarga->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
