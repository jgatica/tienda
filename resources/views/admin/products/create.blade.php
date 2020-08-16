@extends('layouts.app')

@section('title', 'Bienvenido a App Shop')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')
    {{--header para landing--}}
    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('assets/material-kit/img/profile_city.jpg') }})">
        <div class="container">
            <div class="row">
{{--                <div class="col-md-6">
                    <h1 class="title">Bienvenidos a App Shop</h1>
                    <h4>Realiza pedidos en linea y te contactaremos para coordinar la entrega</h4>
                    <br>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Como funciona
                    </a>
                </div>--}}
            </div>
        </div>
    </div>
    {{--header para landing--}}

    {{--contenido para el landing--}}
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <h2 class="title text-center">Registrar nuevo producto</h2>
                <form method="post" action="{{ url('/admin/products') }}" >
                    @csrf
             {{--       $table->string('name');
                    $table->string('description');
                    $table->text('long_description')->nullable();
                    $table->float('price');--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nombre del producto</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Descripción corta</label>
                                <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                                @error('description')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Precio</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                        @error('precio')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción extensa del producto</label>
                        <textarea class="form-control" name="long_description" id="long_description" rows="3" >{{ old('long_description') }}</textarea>
                        @error('long_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar producto</button>

                </form>
            </div>

        </div>
    </div>
    {{--contenido para el landing--}}


    @include('includes.footer')
@endsection
