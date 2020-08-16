@extends('layouts.app')

@section('title', 'Bienvenido a App Shop')

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
                <h2 class="title">Productos disponibles</h2>
                <div class="team">
                    <div class="row">

                        <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round">Nuevo producto</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th >Nombre</th>
                                <th>Descripcion</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                                <th class="w-25">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productos as $producto)
                            <tr>
                                <td class="text-center">{{ $producto->id }}</td>
                                <td>{{ $producto->name }}</td>
                                <td>{{ $producto->description }}</td>
                                <td>{{ $producto->category->name?? '' }}</td>
                                <td class="text-right">&euro; {{ $producto->price }}</td>
                                <td class="td-actions text-right">
                                    <form action="{{ url('/admin/products/'.$producto->id.'/delete') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-user"></i>
                                        </a>
                                        <a href="{{ url('/admin/products/'.$producto->id.'/edit') }}" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ url('/admin/products/'.$producto->id.'/images') }}" rel="tooltip" title="Imágenes del producto" class="btn btn-warning btn-simple btn-xs">
                                            <i class="fa fa-image"></i>
                                        </a>
                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $productos->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--contenido para el landing--}}

    @include('includes.footer')
@endsection
