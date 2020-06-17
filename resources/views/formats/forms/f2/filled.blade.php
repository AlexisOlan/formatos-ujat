@extends('formats.template')

@section('content')
    <div class="alert alert-success">
        {{session()->get('success_message')}}
    </div>

    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="pt-4 card-header d-flex justify-content-around">
                <h5 class="card-title pt-2">Datos a imprimir</h5>
                <a href="{{route('filled.f2')}}" class="btn btn-primary">Imprimir</a>
            </div>
            <div class="card-content">
                <div class="card-body">
                    {{-- @foreach($alumno as $item) --}}
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Alumno:</span><br> {{ $alumno['name' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Matrícula:</span><br> {{ $alumno['matricula' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Trabajo recepcional:</span><br> {{ $alumno['job-title' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Folio:</span><br> {{ $alumno['folio' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Mestro N.1:</span><br> {{ $alumno['teacher1' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Maestro N.2:</span><br> {{ $alumno['teacher2' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Maestro de la asignatura:</span><br> {{ $alumno['teacher3' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Carrera:</span><br> {{ $alumno['carrer' ] }}
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection