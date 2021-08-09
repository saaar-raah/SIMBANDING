@extends('admin.master')

<x-datatables />

@section('content')
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-7 align-self-center">
      <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View Pengumuman</h4>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb m-0 p-0">
            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
            <li class="breadcrumb-item text-muted active" aria-current="page">View Pengumuman</li>
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
  <x-notif />
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data</h4>

        <p class="text-muted">
          Tambah Data Pengumuman
        </p>

        <!-- Signup modal content -->
        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
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

                <form method="POST" action="{{route('pengumumanAdmin.store')}}" class="pl-3 pr-3 w-100"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="form-group w-100">
                    <label>Judul</label>
                    <textarea class="judul" name="judul" class="form-control w-100"
                      placeholder="Judul"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Isi</label>
                    <textarea class="isi" name="isi" class="form-control" placeholder="Isi"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Foto</label>
                    <input name="foto" type="file" class=".form-control-file">
                  </div>
                  {{--
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I
                                                accept <a href="#">Terms and Conditions</a></label>
                                        </div>
                                    </div> --}}

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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup-modal">Tambah
            Data</button>

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
                  <th>JUDUL</th>
                  <th>ISI</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pengumuman as $pengumumans)
                <tr>
                  <td>{{$pengumumans->id}}</td>
                  <td>{!! $pengumumans->judul !!}</td>
                  <td>{!!$pengumumans->isi !!}</td>
                  <td>
                    <a href="{{route('pengumumanAdmin.edit',$pengumumans->id)}}"
                      class="btn waves-effect waves-light btn-warning">
                      EDIT
                    </a>
                    <form class="btn" method="post" action="{{route('pengumumanAdmin.destroy',$pengumumans->id)}}">
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