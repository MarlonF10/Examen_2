@extends('layouts.app')

@section('template_title')
    {{ $travelTicket->name ?? "{{ __('Show') Travel Ticket" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Boleto de Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('travel-ticket.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $travelTicket->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de Salida:</strong>
                            {{ $travelTicket->Departure_time }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Prevista de Llegada:</strong>
                            {{ $travelTicket->Expected_arrival_time }}
                        </div>
                        <div class="form-group">
                            <strong>Importe:</strong>
                            {{ $travelTicket->Imported }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Regsitro:</strong>
                            {{ $travelTicket->Register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $travelTicket->rout }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
