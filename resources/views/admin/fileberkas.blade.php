@extends('admin.master')

<x-datatables/>

@section('content')





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
    <x-notif/>
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
                                        {{-- <span><img class="mr-2" src="../assets/images/logo-icon.png"
                                                alt="" height="18"><img
                                                src="../assets/images/logo-text.png" alt=""
                                                height="18"></span> --}}
                                    <h3 class="text-dark">Tambah Data</h3>
                                </div>

                                <form  method="POST" action="{{URL::route('fileberkasAdmin.store')}}" class="pl-3 pr-3" action="#" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama File</label>
                                        {{-- <input type="text" name="judul" class="form-control" placeholder="judul"> --}}
                                        <input name="nama" type="text" class="form-control" placeholder="Masukkan nama file" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Link File</label>
                                        {{-- <input name="isi" type="text" class="form-control" placeholder="isi"> --}}
                                        <input name="link_file" type="text" class="form-control" placeholder="Masukkan link file" required>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <div class="">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
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
                    <h4 class="card-title">File Berkas</h4>
                    <h6 class="card-subtitle">Halaman untuk mengatur tabel pengunduhan berkas.
                    </h6>
                    <div class="btn-list  pt-2 pb-2">
                        <!-- Custom width modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#signup-modal">New Data</button>

                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                            <thead class="thead-primary">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Link</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fileberkas as $item)
                                <tr>
                                    <td  style="text-align: center;">{{ $item->id}}</td>
                                    <td style=
                                    "max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!! $item->nama !!}</td>
                                    <td style=
                                    "max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!! $item->link_file !!}</td>
                                    <td >{!! $item->file !!}</td>
                                    <td style="text-align: center;">
                                        <a style="border-radius: 15px; " href="{{URL::route('fileberkasAdmin.edit',$item->id)}}"
                                            class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    <form  class="btn" method="post" action="{{URL::route('fileberkasAdmin.destroy',$item->id)}}">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" style="border-radius: 15px;" class="btn waves-effect waves-light btn-outline-secondary pt-1 pb-1">
                                        <i class="far fa-trash-alt"></i> Delete
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
    menubar: false,
  });
  tinymce.init({
      selector: "textarea.isi",
      menubar: false,
  });
</script>
@endsection