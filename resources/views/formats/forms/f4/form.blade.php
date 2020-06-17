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
                        <form method="get" action="{{route('search')}}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="search">Ingrese matrícula:</label>
                                        <input type="text" name="search" id="search" class="form-control" value="{{old('search')}}">
                                        {!!$errors->first('search', '<span style="color:#FA4747;" class="error-validate">:message</span>')!!}
                                    </div>
                                    <div class="d-block d-lg-inline-block">
                                        <button class="btn btn-primary" type="submit">Buscar </button>
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