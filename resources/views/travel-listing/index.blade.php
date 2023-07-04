@extends('layouts.app')

@section('template_title')
    Travel Listing
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de viaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('travel-listing.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Lista de vaje') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Promocion</th>
										<th>Nombre del lugar</th>
										<th>Hora de salida</th>
										<th>Hora prevista de llegada</th>
										<th>Fecha de registro</th>
										<th>Pasajero</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($travelListings as $travelListing)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $travelListing->Giveaways }}</td>
											<td>{{ $travelListing->Name_of_the_place }}</td>
											<td>{{ $travelListing->Departure_time }}</td>
											<td>{{ $travelListing->Expected_arrival_time }}</td>
											<td>{{ $travelListing->Register_date }}</td>
											<td>{{ $travelListing->passenger }}</td>

                                            <td>
                                                <form action="{{ route('travel-listing.destroy',$travelListing->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('travel-listing.show',$travelListing->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('travel-listing.edit',$travelListing->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $travelListings->links() !!}
            </div>
        </div>
    </div>
@endsection
