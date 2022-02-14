@extends('adminlte::page')

@section('title', 'cajeros')

@section('content_header')
    <h1>Registro de cajeros </h1>
@stop

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('cajeros.create') }}" class="btn btn-md btn-success mb-3">NUEVO cajeros</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                              
                                <th scope="col">APELLIDOS</th>
                                <th scope="col">NOMBRES</th>
                                <th scope="col">CEL/TEL</th>
                                <th scope="col">DIRECCION</th>
                            
                             
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($cajeros as $cajero)
                                <tr>
                                
                                    <td>{{ $cajero->apellidos }}</td>
                                    <td>{{ $cajero->nombres }}</td>                                  
                                    <td>{{ $cajero->celtel }}</td>  
                                    <td>{{ $cajero->direccion }}</td>  
                              
                                    <td class="text-center">
                                            <form onsubmit="return confirm('¿Está seguro?');" action="{{ route('cajeros.destroy', $cajero->id) }}" method="POST">
                                            <a href="{{ route('cajeros.show', $cajero->id) }}" class="btn btn-sm btn-info">MOSTRAR</a>
                                            <a href="{{ route('cajeros.edit', $cajero->id) }}" class="btn btn-sm btn-primary">EDITAR</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">ELIMINAR</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                  Los datos de los cajeros de flia aún no están disponibles.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $cajeros->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@stop

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //Mensaje
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'ÉXITO'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'ERROR'); 
            
        @endif
    </script>
@stop