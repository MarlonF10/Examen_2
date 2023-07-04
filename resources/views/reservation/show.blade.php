@extends('layouts.app')

@section('template_title')
    {{ $reservation->name ?? "{{ __('Show') Reservation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Reservacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservation.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>No Reservacion:</strong>
                            {{ $reservation->No_Reservation }}
                        </div>
                        <div class="form-group">
                            <strong>Adelanto:</strong>
                            {{ $reservation->Advance }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $reservation->Register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $reservation->customer }}
                        </div>
                        <div class="form-group">
                            <strong>Promocion:</strong>
                            {{ $reservation->promotion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
