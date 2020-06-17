@extends('formats.template')

@section('content')

<div class="container mt-5 mb-5">
    <div class="card shadow">
        <div class="card-header pt-4">
            <h4 class="card-title"><i class="fa fa-icon-list"></i> Formulario de formato F2</h4>
        </div>

        <div class="card-content">
            <div class="card-body">
                <div class="form form-horizontal">
                    <div class="form-body">
                        <form method="POST" action="{{route('form.store')}}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="alumno">Alumno:</label>
                                        <input type="text" name="alumno" id="alumno" class="form-control" value="{{old('alumno')}}">
                                        {!!$errors->first('alumno', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="matricula">Matrícula:</label>
                                        <input type="text" name="matricula" id="matricula" class="form-control" value="{{old('matricula')}}">
                                        {!!$errors->first('matricula', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="trabajo">Nombre del Anteproyecto:</label>
                                        <input type="text" name="trabajo" id="trabajo" class="form-control" value="{{old('trabajo')}}">
                                        {!!$errors->first('trabajo', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="folio">Folio:</label>
                                        <input type="text" name="folio" id="folio" class="form-control" value="{{old('folio')}}">
                                        {!!$errors->first('folio', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="masig">Nombre del profesor investigador:</label>
                                        <input type="text" name="masig" id="masig" class="form-control" value="{{old('masig')}}">
                                        {!!$errors->first('masig', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="maestro1">Nombre de asesor #1:</label>
                                        <input type="text" name="maestro1" id="maestro1" class="form-control" value="{{old('maestro1')}}">
                                        {!!$errors->first('maestro1', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="maestro2">Nombre de asesor #2:</label>
                                        <input type="text" name="maestro2" id="maestro2" class="form-control" value="{{old('maestro2')}}">
                                        {!!$errors->first('maestro2', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="lic">Licenciatura:</label>
                                        <input type="text" name="lic" id="lic" class="form-control" value="{{old('lic')}}">
                                        {!!$errors->first('lic', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="d-block d-lg-inline-block">
                                        <button class="btn btn-primary" type="submit">Generar <i class="fa fa-pencil"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection