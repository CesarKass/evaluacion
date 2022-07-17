@extends('layouts.app')

@section('template_title')
    Update Tblsolicitude
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Tblsolicitude</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tblsolicitudes.update', $tblsolicitude->id_solicitud) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tblsolicitude.form', ['modo' => 'Actualizar']);

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
