@extends('layouts.app')

@section('template_title')
    {{ $transport->name ?? "{{ __('Show') Transport" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Transporte</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transport.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $transport->Brand }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $transport->Model }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $transport->Enabled }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $transport->Condition }}
                        </div>
                        <div class="form-group">
                            <strong>Papeles de Transporte:</strong>
                            {{ $transport->Papels_Transport }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de registro:</strong>
                            {{ $transport->Register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Pasajeros:</strong>
                            {{ $transport->passenger }}
                        </div>
                        <div class="form-group">
                            <strong>Conductor:</strong>
                            {{ $transport->driver }}
                        </div>
                        <div class="form-group">
                            <strong>Mecanicos:</strong>
                            {{ $transport->mechanic }}
                        </div>
                        <div class="form-group">
                            <strong>Agencia:</strong>
                            {{ $transport->agency }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
