<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <!-- {{ Form::label('id_solicitud') }} -->
            {{ Form::hidden('id_solicitud', 1, ['class' => 'form-control' . ($errors->has('id_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Id Solicitud']) }}
            {!! $errors->first('id_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group {{ ($modo == 'crear')? 'invisible' : '' }}">
            {{ Form::label('Solo Usuarios asesores') }}
            <!-- {{ Form::select('id_Usuario_Asignado',  $users,  $tblsolicitude->id_Usuario_Asignado, ['class' => 'form-control' . ($errors->has('id_Usuario_Asignado') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario Asignado']) }} -->
            <Select class="form-control" name="id_Usuario_Asignado">
                @foreach ($users->all()  as $u)
                    <option value=" {{ $u->id }}">
                        {{ $u->nombre }}
                    </option>
                @endforeach
            </Select>
            {!! $errors->first('id_Usuario_Asignado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_Solicitante') }}
            {{ Form::text('nombre_Solicitante', $tblsolicitude->nombre_Solicitante, ['class' => 'form-control' . ($errors->has('nombre_Solicitante') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Solicitante']) }}
            {!! $errors->first('nombre_Solicitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paterno_Solicitante') }}
            {{ Form::text('paterno_Solicitante', $tblsolicitude->paterno_Solicitante, ['class' => 'form-control' . ($errors->has('paterno_Solicitante') ? ' is-invalid' : ''), 'placeholder' => 'Paterno Solicitante']) }}
            {!! $errors->first('paterno_Solicitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materno_Solicitante') }}
            {{ Form::text('materno_Solicitante', $tblsolicitude->materno_Solicitante, ['class' => 'form-control' . ($errors->has('materno_Solicitante') ? ' is-invalid' : ''), 'placeholder' => 'Materno Solicitante']) }}
            {!! $errors->first('materno_Solicitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::number('activo', $tblsolicitude->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_Solicitud') }}
            {{ Form::datetime('fecha_Solicitud', $tblsolicitude->fecha_Solicitud, ['class' => 'form-control' . ($errors->has('fecha_Solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Solicitud']) }}
            {!! $errors->first('fecha_Solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>