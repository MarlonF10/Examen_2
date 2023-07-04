@extends('layouts.app')

@section('template_title')
    Travel Ticket
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Boleto de Viaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('travel-ticket.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Boleto de Viaje') }}
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
                                        
										<th>Fecha</th>
										<th>Hora de Salida</th>
										<th>Hora Prevista de Llegada</th>
										<th>Importe</th>
										<th>Fecha de Regsitro</th>
										<th>Ruta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($travelTickets as $travelTicket)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $travelTicket->Date }}</td>
											<td>{{ $travelTicket->Departure_time }}</td>
											<td>{{ $travelTicket->Expected_arrival_time }}</td>
											<td>{{ $travelTicket->Imported }}</td>
											<td>{{ $travelTicket->Register_date }}</td>
											<td>{{ $travelTicket->rout }}</td>

                                            <td>
                                                <form action="{{ route('travel-ticket.destroy',$travelTicket->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('travel-ticket.show',$travelTicket->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('travel-ticket.edit',$travelTicket->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $travelTickets->links() !!}
            </div>
        </div>
    </div>
@endsection
