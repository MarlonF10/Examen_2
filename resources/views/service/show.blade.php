@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? "{{ __('Show') Service" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Servicios</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('service.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Hora de Inicio:</strong>
                            {{ $service->Star_Time }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de Finalizacion:</strong>
                            {{ $service->End_Time }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $service->Day }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de servicios:</strong>
                            {{ $service->Type_of_Services }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Basico:</strong>
                            {{ $service->Basic_Cost }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $service->Enable }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $service->rout }}
                        </div>
                        <div class="form-group">
                            <strong>Pasajeros:</strong>
                            {{ $service->passenger }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $service->customer }}
                        </div>
                        <div class="form-group">
                            <strong>Transport:</strong>
                            {{ $service->transport }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
