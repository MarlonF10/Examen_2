@extends('layouts.app')

@section('template_title')
    Customer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('customer.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Cliente') }}
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
										<th>Direccion</th>
										<th>Email</th>
										<th>Numero Telefonico</th>
										<th>Genero</th>
										<th>Municipio</th>
										<th>Departamento</th>
										<th>Dni</th>
										<th>Edad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $customer->Name }}</td>
											<td>{{ $customer->First_Name }}</td>
											<td>{{ $customer->Second_Name }}</td>
											<td>{{ $customer->Address }}</td>
											<td>{{ $customer->email }}</td>
											<td>{{ $customer->Number_Phone }}</td>
											<td>{{ $customer->Gender }}</td>
											<td>{{ $customer->Municipality }}</td>
											<td>{{ $customer->Department }}</td>
											<td>{{ $customer->DNI }}</td>
											<td>{{ $customer->Age }}</td>

                                            <td>
                                                <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('customer.show',$customer->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('customer.edit',$customer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $customers->links() !!}
            </div>
        </div>
    </div>
@endsection
