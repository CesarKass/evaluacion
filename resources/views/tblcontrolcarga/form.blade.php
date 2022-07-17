<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_Control_Carga') }}
            {{ Form::text('id_Control_Carga', $tblcontrolcarga->id_Control_Carga, ['class' => 'form-control' . ($errors->has('id_Control_Carga') ? ' is-invalid' : ''), 'placeholder' => 'Id Control Carga']) }}
            {!! $errors->first('id_Control_Carga', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Usuario') }}
            {{ Form::text('id_Usuario', $tblcontrolcarga->id_Usuario, ['class' => 'form-control' . ($errors->has('id_Usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_Usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio') }}
            {{ Form::text('anio', $tblcontrolcarga->anio, ['class' => 'form-control' . ($errors->has('anio') ? ' is-invalid' : ''), 'placeholder' => 'Anio']) }}
            {!! $errors->first('anio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $tblcontrolcarga->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>