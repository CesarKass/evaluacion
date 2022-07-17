<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_Bitacora') }}
            {{ Form::text('id_Bitacora', $tblbitacora->id_Bitacora, ['class' => 'form-control' . ($errors->has('id_Bitacora') ? ' is-invalid' : ''), 'placeholder' => 'Id Bitacora']) }}
            {!! $errors->first('id_Bitacora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Usuario') }}
            {{ Form::text('id_Usuario', $tblbitacora->id_Usuario, ['class' => 'form-control' . ($errors->has('id_Usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_Usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cve_accion') }}
            {{ Form::text('cve_accion', $tblbitacora->cve_accion, ['class' => 'form-control' . ($errors->has('cve_accion') ? ' is-invalid' : ''), 'placeholder' => 'Cve Accion']) }}
            {!! $errors->first('cve_accion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $tblbitacora->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('movimiento') }}
            {{ Form::text('movimiento', $tblbitacora->movimiento, ['class' => 'form-control' . ($errors->has('movimiento') ? ' is-invalid' : ''), 'placeholder' => 'Movimiento']) }}
            {!! $errors->first('movimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>