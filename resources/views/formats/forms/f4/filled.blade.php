@extends('formats.template')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="pt-4 card-header d-flex justify-content-around">
                <h5 class="card-title pt-2">Datos a imprimir</h5>
                <a href="{{route('filled.f4')}}" class="btn btn-primary">Imprimir</a>
            </div>
            <div class="card-content">
                <div class="card-body">
                    @foreach ($matricula as $mat)
                    <div class="form-group ml-5"> 
                        <span class="font-weight-bold">Alumno:</span><br> {{ $mat['name' ] }}
                    </div>
                    <div class="form-group ml-5"> 
                        <span class="font-weight-bold">Trabajo recepcional:</span><br> {{ $mat['job-title' ] }}
                    </div>
                    <div class="form-group ml-5"> 
                        <span class="font-weight-bold">Maestro de la asignatura:</span><br> {{ $mat['teacher3' ] }}
                    </div>
                    <div class="form-group ml-5"> 
                        <span class="font-weight-bold">Carrera:</span><br> {{ $mat['carrer' ] }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection