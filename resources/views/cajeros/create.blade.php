@extends('adminlte::page')

@section('title', 'cajeros')

@section('content_header')
    <h1>Registro de Paders de Flia</h1>
@stop

@section('content')
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    <a href="{{ route('cajeros.index') }}" class="btn btn-md btn-success mb-3">REGRESAR</a>

                    <form action="{{ route('cajeros.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                       
                        <div class="form-group">
                            <label class="font-weight-bold">APELLIDOS</label>
                            <input type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" placeholder="Ingrese los apellidos del cajero">
                        
                            
                            @error('apellidos')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">NOMBRES</label>
                            <input type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" placeholder="Ingrese el nombres del cajero">
                        
                                                      
                            @error('nombres')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Cel/Tel</label>
                            <input type="int" class="form-control @error('celtel') is-invalid @enderror" name="celtel" value="{{ old('celtel') }}" placeholder="Ingrese número de contacto">
                        
                           
                            @error('celtel')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">DIRECCION</label>
                            <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" placeholder="Ingrese la direccion">
                        
                                                       
                            @error('direccion')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                       
                        
                        <button type="submit" class="btn btn-md btn-primary">GUARDAR</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop