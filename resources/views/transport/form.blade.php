<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('Brand', $transport->Brand, ['class' => 'form-control' . ($errors->has('Brand') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('Brand', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('Model', $transport->Model, ['class' => 'form-control' . ($errors->has('Model') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('Model', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Disponible') }}
            {{ Form::text('Enabled', $transport->Enabled, ['class' => 'form-control' . ($errors->has('Enabled') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('Enabled', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condicion') }}
            {{ Form::text('Condition', $transport->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : ''), 'placeholder' => 'Condicion']) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Papels_Transport') }}
            {{ Form::text('Papels_Transport', $transport->Papels_Transport, ['class' => 'form-control' . ($errors->has('Papels_Transport') ? ' is-invalid' : ''), 'placeholder' => 'Papeles del Transporte']) }}
            {!! $errors->first('Papels_Transport', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de registro') }}
            {{ Form::text('Register_date', $transport->Register_date, ['class' => 'form-control' . ($errors->has('Register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de registro']) }}
            {!! $errors->first('Register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pasajeros') }}
            {{ Form::text('passenger', $transport->passenger, ['class' => 'form-control' . ($errors->has('passenger') ? ' is-invalid' : ''), 'placeholder' => 'Pasajeros']) }}
            {!! $errors->first('passenger', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conductor') }}
            {{ Form::text('driver', $transport->driver, ['class' => 'form-control' . ($errors->has('driver') ? ' is-invalid' : ''), 'placeholder' => 'Conductor']) }}
            {!! $errors->first('driver', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Mecanicos') }}
            {{ Form::text('mechanic', $transport->mechanic, ['class' => 'form-control' . ($errors->has('mechanic') ? ' is-invalid' : ''), 'placeholder' => 'Mecanico']) }}
            {!! $errors->first('mechanic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Agencia') }}
            {{ Form::text('agency', $transport->agency, ['class' => 'form-control' . ($errors->has('agency') ? ' is-invalid' : ''), 'placeholder' => 'Agencia']) }}
            {!! $errors->first('agency', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>