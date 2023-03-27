@extends('layouts.app')

@section('content')
<style>
    .image {
        width: 90px;
        heigt: 90px;
        margin-bottom: 15px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset ('storage/images/user/'.Auth::user()->photo)}}" class="img-fluid image" alt="Responsive image">
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>level</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{Auth::user()->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Email</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Nisn</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{Auth::user()->nisn}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Jurusan</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{Auth::user()->jurusan}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Angkatan</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{Auth::user()->angkatan}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
