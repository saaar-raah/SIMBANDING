@extends('admin.master')

<x-datatables/>

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Pesan</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View Pesan</li>
                    </ol>
                </nav>
            </div>
        </div>
        {{-- <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected="">Aug 19</option>
                    <option value="1">July 19</option>
                    <option value="2">Jun 19</option>
                </select>
            </div>
        </div> --}}
    </div>
</div>
<div class="container-fluid">
    <x-notif/>
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

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
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>JUDUL</th>
                                    <th>PESAN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesan as $pesans)
                                <tr>
                                    <td>{{$pesans->id}}</td>
                                    <td>{{$pesans->nama}}</td>
                                    <td>{{$pesans->email}}</td>
                                    <td>{{$pesans->judul}}</td>
                                    <td>{{$pesans->pesan}}</td>
                                    <td>
                                    {{-- <a href="{{route('pesanAdmin.edit',$pesans->id)}}"  class="btn waves-effect waves-light btn-warning">
                                       EDIT
                                    </a> --}}
                                    <form  class="btn" method="post" action="{{route('pesanAdmin.destroy',$pesans->id)}}">
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