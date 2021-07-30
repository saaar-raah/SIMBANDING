@extends('admin.master')

<x-datatables/>

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Alur</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View Alur</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <x-notif/>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data</h4>

                <p class="text-muted">
                    Tambah Data Alur
                </p>

                <!-- Signup modal content -->
                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="text-center mt-2 mb-4">
                                    <a href="index.html" class="text-success">
                                        {{-- <span><img class="mr-2" src="../assets/images/logo-icon.png"
                                                alt="" height="18"><img
                                                src="../assets/images/logo-text.png" alt=""
                                                height="18"></span> --}}
                                                <h3 class="text-dark">Tambah Data</h3>
                                    </a>
                                </div>

                                <form  method="POST" action="{{route('alurAdmin.store')}}" class="pl-3 pr-3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Alur</label>
                                        <input type="text" name="nama_alur" class="form-control" placeholder="Judul">
                                    </div>
                                    <div class="form-group">
                                        <label>Isi</label>
                                        <input name="isi" type="text" class="form-control" placeholder="Isi">
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input name="link" type="text" class="form-control" placeholder="Isi">
                                    </div>
                                    <div class="form-group">
                                        <label>Urutan</label>
                                        <input name="urutan" type="text" class="form-control" placeholder="Isi">
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>

                                </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                <div class="btn-list">
                    <!-- Custom width modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#signup-modal">Tambah Data</button>

                </div>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Zero Configuration</h4>
                    <h6 class="card-subtitle">DataTables has most features enabled by default
                    </h6>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA ALUR</th>
                                    <th>ISI</th>
                                    <th>LINK</th>
                                    <th>URUTAN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alur as $alurs)
                                <tr>
                                    <td>{{$alurs->id}}</td>
                                    <td>{{$alurs->nama_alur}}</td>
                                    <td>{{$alurs->isi}}</td>
                                    <td>{{$alurs->link}}</td>
                                    <td>{{$alurs->urutan}}</td>
                                    <td>
                                    <a href="{{route('alurAdmin.edit',$alurs->id)}}"  class="btn waves-effect waves-light btn-warning">
                                       EDIT
                                    </a>
                                    <form  class="btn" method="post" action="{{route('alurAdmin.destroy',$alurs->id)}}">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn waves-effect waves-light btn-danger">DELETE</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    {{-- <th>ID</th>
                                    <th>JUDUL</th>
                                    <th>isi</th>
                                    <th>Action</th> --}}
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush
@endsection