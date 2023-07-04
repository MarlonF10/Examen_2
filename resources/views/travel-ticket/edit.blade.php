@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Travel Ticket
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Boleto de Viaje</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('travel-ticket.update', $travelTicket->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('travel-ticket.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
