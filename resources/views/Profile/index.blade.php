@extends('template.layout')

@section('title')
    Profile
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Hi, {{ !empty(Auth()->user()->name) ? Auth()->user()->name : '-' }}</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h1>{{ !empty(Auth()->user()->name) ? Auth()->user()->name : '-' }}</h1>
                            <p class="text-muted mb-1">{{ !empty(Auth()->user()->role_id) ? Auth()->user()->role_id : '-' }}</p>

                            <!-- <button type="button" onclick="#" class="btn btn-tool btn-primary shadow-sm rounded-pill" style="width: 120px;">
                                Edit Profil
                            </button> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    
                    <div class="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->name}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jurusan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->jurusan_id}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->jenis_kelamin}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Agama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->agama}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->email}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->telepon}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NISN</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->nisn}}</p>
                                </div>
                            </div>

                            <hr>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tempat Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->tempat_lahir}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Taggal Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->tanggal_lahir}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->alamat}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Asal Sekolah</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{Auth()->user()->asal_sekolah}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection