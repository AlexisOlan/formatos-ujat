@extends('formats.template')

@section('content')

<div class="container mt-5 mb-5">
    <div class="card shadow">
        <div class="card-header pt-4">
            <h4 class="card-title"><i class="fa fa-icon-list"></i> Formulario de formato F4</h4>
        </div>

        <div class="card-content">
            <div class="card-body">
                <div class="form form-horizontal">
                    <div class="form-body">
                        <form method="POST" action="{{route('form.storef4')}}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-sm-7">
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
                                        <label for="maestro1">Nombre de asesor:</label>
                                        <input type="text" name="maestro1" id="maestro1" class="form-control" value="{{old('maestro1')}}">
                                        {!!$errors->first('maestro1', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="maestro2">Nombre de asesor:</label>
                                        <input type="text" name="maestro2" id="maestro2" class="form-control" value="{{old('maestro2')}}">
                                        {!!$errors->first('maestro2', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="lic">Licenciatura:</label>
                                        <input type="text" name="lic" id="lic" class="form-control" value="{{old('lic')}}">
                                        {!!$errors->first('lic', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="domicilio">Domicilio:</label>
                                        <input type="text" name="domicilio" id="domicilio" class="form-control" value="{{old('domicilio')}}">
                                        {!!$errors->first('domicilio', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="local">Localidad:</label>
                                        <input type="text" name="local" id="local" class="form-control" value="{{old('local')}}">
                                        {!!$errors->first('local', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Teléfono de casa:</label>
                                        <input type="tel" name="telefono" id="telefono" class="form-control" value="{{old('telefono')}}">
                                        {!!$errors->first('telefono', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="tel" name="celular" id="celular" class="form-control" value="{{old('celular')}}">
                                        {!!$errors->first('celular', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="d-block d-lg-inline-block">
                                        <button class="btn btn-primary" type="submit">Generar </button>
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