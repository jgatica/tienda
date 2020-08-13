@extends('layouts.app')

@section('title', 'App Shop | Dashboard')

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
                <h2 class="title text-center">Dashboad</h2>
                @if (session('notificacion'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notificacion') }}
                    </div>
                @endif

                <div class="col-lg-6 col-md-8">
                    <ul class="nav nav-pills nav-pills-icons" role="tablist">
                        <!--
                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                    -->
                        <li class="nav-item">
                            <a class="nav-link active show" href="#dashboard-1" role="tab" data-toggle="tab" aria-selected="true">
                                <i class="material-icons">dashboard</i>
                                Carrito de compras
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#schedule-1" role="tab" data-toggle="tab" aria-selected="false">
                                <i class="material-icons">schedule</i>
                                Pedidos realizados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab" aria-selected="false">
                                <i class="material-icons">list</i>
                                Tasks
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-space">
                        <div class="tab-pane active show" id="dashboard-1">
                            <p>Tu carrito de compras presenta {{ auth()->user()->cart->details->count() }} productos. </p>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th >Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                        <th class="w-25">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(auth()->user()->cart->details as $detail)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ $detail->product->featured_image_url }}" alt="" height="50px">
                                            </td>
                                            <td>
                                                <a href="{{ url('product/'.$detail->product->id) }}">
                                                    {{ $detail->product->name }}
                                                </a>
                                            </td>
                                            <td>&euro; {{ $detail->product->price }}</td>
                                            <td class="text-right">{{ $detail->quantity }}</td>
                                            <td class="text-right">{{ $detail->quantity * $detail->product->price }}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{ url('/cart/') }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                                    <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-info"></i>
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
                        </div>
                        <div class="tab-pane" id="schedule-1">
                            Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                            <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                        </div>
                        <div class="tab-pane" id="tasks-1">
                            Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                            <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--contenido para el landing--}}


   @include('includes.footer')
@endsection
