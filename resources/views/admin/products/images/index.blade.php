@extends('layouts.app')

@section('title', 'Imágenes de producto')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')
    {{--header para landing--}}
    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('assets/material-kit/img/profile_city.jpg') }})">

    </div>
    {{--header para landing--}}

    {{--contenido para el landing--}}
    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Imágenes de producto: "{{ $producto->name }}"</h2>
                <div class="team">
                    <div class="row">

                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="photo" required>
                            <button type="submit" class="btn btn-primary btn-round">Subir nueva imagen</button>
                            <a href="{{ url('/admin/products/') }}" class="btn btn-default btn-round">Volver al listado de productos</a>
                        </form>

                        <div class="card-deck">
                            @foreach($imagenes as $imagen)
                            <div class="card">
                                <img class="card-img-top" src="{{ $imagen->url }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="image_id" value="{{ $imagen->id }}">
                                        <button type="submit" class="btn btn-danger btn-round">Eliminar imagen</button>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--contenido para el landing--}}

    @include('includes.footer')
@endsection
