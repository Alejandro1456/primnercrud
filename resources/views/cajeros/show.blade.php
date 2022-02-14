@extends('adminlte::page')

@section('title', 'cajeros')

@section('content_header')
    <h1>cajeros</h1>
@stop

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                    <a href="{{ route('cajeros.index') }}" class="btn btn-md btn-success mb-3">REGRESAR</a>

                        <table class="table table-bordered">
                          
                            <tbody>
                                <tr>
                                    <td>
                                                
                                        <p>
                                            <label>APELLIDOS : </label><b> {{ $cajero->apellidos }}</b>
                                        </p>
                                        <p>
                                            <label>NOMBRES : </label><b> {{ $cajero->nombres }}</b>
                                        <p>
                                        <p>
                                            <label>CELTEL : </label><b> {{ $cajero->celtel }}</b>
                                        <p>
                                        <p>
                                            <label>DIRECCION: </label><b> {{ $cajero->direccion }}</b>
                                        <p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

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
@stop