@extends('admin.master')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang, {{Auth::user()->name}}!</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex  d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{$FAQ->count()}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data FAQ</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        {{-- <i class="fas fa-question opacity-7 text-muted"></i> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">{{$pengumuman->count()}}</h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Pengumuman
                        </h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        {{-- <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium">{{$alur->count()}}</h2>

                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Alur</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        {{-- <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg></span> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection