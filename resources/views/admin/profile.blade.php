@extends('admin.master')
@section('content')
    <div  class="container-fluid">

        <div style="background-color: white" class="row align-items-center">
            <div class="col-lg-4 text-center mb-4  ">
                <img src="{{URL::asset('img/ava/'.Auth::user()->foto)}}" alt="image" class="img-thumbnail" height="200" width="200">
                <p class="mt-3 mb-0">
                </p>
            </div>
            <div class="col-lg">
                <div  class="card mt-5 mb-5">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile</h4>
                        <form action="{{URL::route('profile.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
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
                                            <div class="">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">{{Auth::user()->foto}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="form-actions">
                                        <button style="border-radius: 15px" type="submit" class="btn btn-info">Submit</button>
                                    </div>
        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

