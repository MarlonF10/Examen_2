@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Passenger
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Pasajero</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('passenger.update', $passenger->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('passenger.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
