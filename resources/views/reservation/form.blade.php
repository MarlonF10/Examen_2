<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('No_Reservacion') }}
            {{ Form::text('No_Reservation', $reservation->No_Reservation, ['class' => 'form-control' . ($errors->has('No_Reservation') ? ' is-invalid' : ''), 'placeholder' => 'No Reservacion']) }}
            {!! $errors->first('No_Reservation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Adelanto') }}
            {{ Form::text('Advance', $reservation->Advance, ['class' => 'form-control' . ($errors->has('Advance') ? ' is-invalid' : ''), 'placeholder' => 'Adelante']) }}
            {!! $errors->first('Advance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Registro') }}
            {{ Form::text('Register_date', $reservation->Register_date, ['class' => 'form-control' . ($errors->has('Register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Registro']) }}
            {!! $errors->first('Register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::text('customer', $reservation->customer, ['class' => 'form-control' . ($errors->has('customer') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('customer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('promocion') }}
            {{ Form::text('promotion', $reservation->promotion, ['class' => 'form-control' . ($errors->has('promotion') ? ' is-invalid' : ''), 'placeholder' => 'Promocion']) }}
            {!! $errors->first('promotion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>