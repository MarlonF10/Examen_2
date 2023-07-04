@extends('layouts.app')

@section('template_title')
    Passenger
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pasajeros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('passenger.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Pasajero') }}
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
                                        
										<th>Nombre</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>DNI</th>
										<th>Numero Telefonico</th>
										<th>Genero</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($passengers as $passenger)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $passenger->Name }}</td>
											<td>{{ $passenger->First_Name }}</td>
											<td>{{ $passenger->Second_Name }}</td>
											<td>{{ $passenger->DNI }}</td>
											<td>{{ $passenger->Number_Phone }}</td>
											<td>{{ $passenger->Gender }}</td>
											<td>{{ $passenger->Email }}</td>

                                            <td>
                                                <form action="{{ route('passenger.destroy',$passenger->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('passenger.show',$passenger->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('passenger.edit',$passenger->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminiar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $passengers->links() !!}
            </div>
        </div>
    </div>
@endsection
