@extends('layouts.app')

@section('template_title')
    {{ $promotion->name ?? "{{ __('Show') Promotion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Promocion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('promotion.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $promotion->Description }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $promotion->Cost }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De:</strong>
                            {{ $promotion->Date_from }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Para:</strong>
                            {{ $promotion->Date_to }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $promotion->Image }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $promotion->Enable }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Registro:</strong>
                            {{ $promotion->Register_date }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $promotion->rout }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $promotion->customer }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
