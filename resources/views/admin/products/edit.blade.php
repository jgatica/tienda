@extends('layouts.app')

@section('title', 'Bienvenido a App Shop')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')
    {{--header para landing--}}
    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('assets/material-kit/img/profile_city.jpg') }})">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    {{--header para landing--}}

    {{--contenido para el landing--}}
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <h2 class="title text-center">Registrar nuevo producto</h2>
                <form method="post" action="{{ url('/admin/products/'.$producto->id.'/edit') }}" >
                    @csrf
             {{--       $table->string('name');
                    $table->string('description');
                    $table->text('long_description')->nullable();
                    $table->float('price');--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Nombre del producto</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $producto->name) }}">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Descripción corta</label>
                                <input type="text" name="description" class="form-control" value="{{ old('description', $producto->description) }}">
                                @error('description')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Precio</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price', $producto->price) }}">
                        @error('price')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="long_description">Descripción extensa del producto</label>
                        <textarea class="form-control" name="long_description" id="long_description" rows="3" >{{ old('long_description', $producto->long_description) }}</textarea>
                        @error('long_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    <a href="{{ url('/admin/products') }}" class="btn btn-danger">Cancelar</a>

                </form>
            </div>

        </div>
    </div>
    {{--contenido para el landing--}}


    {{--footer para landing--}}
    <footer class="footer footer-default">
        <div class="container">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com/">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/presentation">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/blog">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>
    {{--footer para landing--}}
@endsection
