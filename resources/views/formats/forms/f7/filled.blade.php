@extends('formats.template')

@section('content')
    <div class="alert alert-success">
        {{session()->get('success_message')}}
    </div>

    <div class="container mt-5 mb-5">
        <div class="card shadow">
            <div class="pt-4 card-header d-flex justify-content-around">
                <h5 class="card-title pt-2">Datos a imprimir</h5>
                <a href="{{route('filled.f7')}}" class="btn btn-primary">Imprimir</a>
            </div>
            <div class="card-content">
                <div class="card-body">
                    {{-- @foreach($alumno as $item) --}}
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Trabajo recepcional:</span><br> {{ $alumno['trabajo' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Folio:</span><br> {{ $alumno['folio' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Bajo la modalidad de:</span><br> {{ $alumno['modalidad' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Mestro N.1:</span><br> {{ $alumno['maestro1' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Maestro N.2:</span><br> {{ $alumno['maestro2' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Carrera:</span><br> {{ $alumno['lic' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Domicilio:</span><br> {{ $alumno['domicilio' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Localidad:</span><br> {{ $alumno['local' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Teléfono de casa:</span><br> {{ $alumno['telefono' ] }}
                        </div>
                        <div class="form-group ml-5"> 
                            <span class="font-weight-bold">Celular:</span><br> {{ $alumno['celular' ] }}
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection