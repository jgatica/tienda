@extends('layouts.app')

@section('title', 'App Shop | Dashboard')

@section('body-class', 'profile-page sidebar-collapse')

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('assets/material-kit/img/profile_city.jpg') }});"></div>

    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{ $producto->featured_image_url }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">{{ $producto->name }}</h3>
                                <h6>{{ $producto->category->name }}</h6>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>
                            {{ $producto->long_description }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('assets/material-kit/img/examples/studio-1.jpg') }}" class="rounded">
                        <img src="{{ asset('assets/material-kit/img/examples/studio-2.jpg') }}" class="rounded">
                        <img src="{{ asset('assets/material-kit/img/examples/studio-5.jpg') }}" class="rounded">
                        <img src="{{ asset('assets/material-kit/img/examples/studio-4.jpg') }}" class="rounded">
                    </div>
                </div>

            </div>
        </div>
    </div>


    @include('includes.footer')
@endsection
