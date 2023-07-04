<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Date', $travelTicket->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora de Salida') }}
            {{ Form::text('Departure_time', $travelTicket->Departure_time, ['class' => 'form-control' . ($errors->has('Departure_time') ? ' is-invalid' : ''), 'placeholder' => 'Hora de Salida']) }}
            {!! $errors->first('Departure_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora Prevista de Llegada') }}
            {{ Form::text('Expected_arrival_time', $travelTicket->Expected_arrival_time, ['class' => 'form-control' . ($errors->has('Expected_arrival_time') ? ' is-invalid' : ''), 'placeholder' => 'Hora Prevista de Llegada']) }}
            {!! $errors->first('Expected_arrival_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Importe') }}
            {{ Form::text('Imported', $travelTicket->Imported, ['class' => 'form-control' . ($errors->has('Imported') ? ' is-invalid' : ''), 'placeholder' => 'Importe']) }}
            {!! $errors->first('Imported', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('Register_date', $travelTicket->Register_date, ['class' => 'form-control' . ($errors->has('Register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('Register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            {{ Form::text('rout', $travelTicket->rout, ['class' => 'form-control' . ($errors->has('rout') ? ' is-invalid' : ''), 'placeholder' => 'Ruta']) }}
            {!! $errors->first('rout', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>