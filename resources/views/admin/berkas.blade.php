@extends('admin.master')

<x-datatables/>

@section('content')



    <x-notif/>

    <div class="row">
        {{-- <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View berkas</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View berkas</li>
                    </ol>
                </nav>
            </div>
        </div> --}}
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

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->


                <!-- Signup modal content -->
                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
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

                                <form  method="POST" action="{{route('berkasAdmin.store')}}" class="pl-3 pr-3" action="#">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Berkas</label>
                                        {{-- <input type="text" name="judul" class="form-control" placeholder="judul"> --}}
                                        <textarea name="judul" class="judul" placeholder="judul"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Isi</label>
                                        {{-- <input name="isi" type="text" class="form-control" placeholder="isi"> --}}
                                        <textarea name="isi" class="isi" placeholder="isi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <input name="icon" type="text" class="form-control" placeholder="Masukkan Icon dari fontawesome.com" required>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>

                                </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
    <!-- basic table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">BERKAS</h4>
                    <h6 class="card-subtitle">VIEW DATA BERKAS
                    </h6>
                    <div class="btn-list  pt-2 pb-2">
                        <!-- Custom width modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#signup-modal">Tambah Data</button>

                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA BERKAS</th>
                                    <th>ISI</th>
                                    <th>ICON</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berkas as $item)
                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{!! $item->judul !!}</td>
                                    <td>{!! $item->isi !!}</td>
                                    <td>{!! $item->icon !!}</td>
                                    <td>
                                    <a href="{{route('berkasAdmin.edit',$item->id)}}" style="border-radius: 15px;" class="btn waves-effect waves-light btn-warning">
                                        <i class="fas fa-edit"> EDIT</i>
                                    </a>
                                    <form  class="btn" method="post" action="{{route('berkasAdmin.destroy',$item->id)}}">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" style="border-radius: 15px;" class="btn waves-effect waves-light btn-danger">
                                        <i class="far fa-trash-alt"> DELETE</i>
                                    </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    {{-- <th>ID</th>
                                    <th>judul</th>
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

<script src="https://cdn.tiny.cloud/1/1c1ffy2lfue3xw9hm1dl4iopopu0tjwwtk19iihkcl871ajo/tinymce/5/tinymce.min.js"
  referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: "textarea.judul",
  });
  tinymce.init({
      selector: "textarea.isi",
  });
</script>
@endsection