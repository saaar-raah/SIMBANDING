@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4  ">
                <img src="{{asset('img/ava/'.Auth::user()->foto)}}" alt="image" class="img-thumbnail" height="200" width="200">
                <p class="mt-3 mb-0">
                </p>
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile</h4>
                        <form action="{{route('profile.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="foto" class="form-control-file" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
