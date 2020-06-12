@extends('formats.template')

@include('formats.partials.loader')

@section('content')
    <div class="container mt-4">
        <div class="row d-flex justify-content-around">
            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <a href="#"><h5 class="card-title text-center font-weight-normal text-dark">Formato (F2)</h5></a>
                    <div class="container text-center">
                        <img src="{{asset('img/formats/f2.png')}}" alt="" height="370px">
                    </div>
                    <p class="card-text d-flex justify-content-around">
                        <a href="{{route('d.f2')}}" class="text-white btn btn-primary">Descargar <i class="fa fa-download"></i></a>
                        <a href="{{route('form.f2')}}" class="text-white btn btn-success">Llenar <i class="fa fa-pencil"></i></a>
                        <a href="{{route('v.f2')}}" class="text-white btn btn-dark"><i class="fa fa-eye"></i></a>
                    </p>
                </div>
            </div>
            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <a href="#"><h5 class="card-title text-center font-weight-normal text-dark">Formato (F4)</h5></a>
                    <div class="container text-center">
                        <img src="{{asset('img/formats/f4.png')}}" alt="" height="370px">
                    </div>
                    <p class="card-text d-flex justify-content-around">
                        <a href="{{route('d.f4')}}" class="text-white btn btn-primary">Descargar <i class="fa fa-download"></i></a>
                        <a href="{{route('form.f4')}}" class="text-white btn btn-success">Llenar <i class="fa fa-pencil"></i></a>
                        <a href="{{route('v.f4')}}" class="text-white btn btn-dark"><i class="fa fa-eye"></i></a>
                    </p>
                </div>
            </div>
            <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <a href="#"><h5 class="card-title text-center font-weight-normal text-dark">Formato (F7)</h5></a>
                    <div class="container text-center">
                        <img src="{{asset('img/formats/f7.png')}}" alt="" height="370px">
                    </div>
                    <p class="card-text d-flex justify-content-around">
                        <a href="{{route('d.f7')}}" class="text-white btn btn-primary">Descargar <i class="fa fa-download"></i></a>
                        <a href="{{route('form.f7')}}" class="text-white btn btn-success">Llenar <i class="fa fa-pencil"></i></a>
                        <a href="{{route('v.f7')}}" class="text-white btn btn-dark"><i class="fa fa-eye"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection