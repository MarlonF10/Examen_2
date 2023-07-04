@extends('layouts.app')

@section('template_title')
    Driver
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Conductor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('driver.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Conductor') }}
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
										<th>Email</th>
										<th>Direccion</th>
										<th>Genero</th>
										<th>Licencia</th>
										<th>Municipio</th>
										<th>Departamento</th>
										<th>Edad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($drivers as $driver)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $driver->Name }}</td>
											<td>{{ $driver->First_Name }}</td>
											<td>{{ $driver->Second_Name }}</td>
											<td>{{ $driver->DNI }}</td>
											<td>{{ $driver->Number_Phone }}</td>
											<td>{{ $driver->Email }}</td>
											<td>{{ $driver->Address }}</td>
											<td>{{ $driver->Gender }}</td>
											<td>{{ $driver->License }}</td>
											<td>{{ $driver->Municipality }}</td>
											<td>{{ $driver->Department }}</td>
											<td>{{ $driver->Age }}</td>

                                            <td>
                                                <form action="{{ route('driver.destroy',$driver->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('driver.show',$driver->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('driver.edit',$driver->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $drivers->links() !!}
            </div>
        </div>
    </div>
@endsection
