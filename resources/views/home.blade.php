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
        <div class="containerSeVeMuyChico">
            <div class="section">
                <h2 class="title text-center">Dashboad</h2>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
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
                            Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                            <br><br>
                            Dramatically visualize customer directed convergence without revolutionary ROI.
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
