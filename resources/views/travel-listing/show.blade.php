@extends('layouts.app')

@section('template_title')
    {{ $travelListing->name ?? "{{ __('Show') Travel Listing" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Lista de viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('travel-listing.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Promocion:</strong>
                            {{ $travelListing->Giveaways }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del lugar:</strong>
                            {{ $travelListing->Name_of_the_place }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de salida:</strong>
                            {{ $travelListing->Departure_time }}
                        </div>
                        <div class="form-group">
                            <strong>Hora prevista de llegada:</strong>
                            {{ $travelListing->Expected_arrival_time }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de registro:</strong>
                            {{ $travelListing->Register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Pasajeros:</strong>
                            {{ $travelListing->passenger }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
