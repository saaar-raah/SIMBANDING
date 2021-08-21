@extends('admin.master')

<x-datatables />

@section('content')

<div class="container-fluid">
  <x-notif />
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->


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
                    <label>Penulis</label>
                    <input name="penulis" type="text" class="form-control" placeholder="Masukkan nama penulis" required>
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




  <!-- basic table -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">PENGUMUMAN</h4>
          <h6 class="card-subtitle">VIEW DATA PENGUMUMAN
          </h6>
          <div class="btn-list pt-2 pb-2">
            <!-- Custom width modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup-modal">Tambah
              Data</button>
          </div>

          <div class="table-responsive">
            <table id="myTable" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>JUDUL</th>
                  <th>ISI</th>
                  <th>PENULIS</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pengumuman as $pengumumans)
                <tr>
                  <td>{{$pengumumans->id}}</td>
                  <td>{!! $pengumumans->judul !!}</td>
                  <td>{!!$pengumumans->isi !!}</td>
                  <td>{{$pengumumans->penulis}}</td>
                  <td>
                    <a style="border-radius: 15px;" href="{{route('pengumumanAdmin.edit',$pengumumans->id)}}"
                      class="btn waves-effect waves-light btn-warning">
                      <i class="fas fa-edit"> EDIT</i>
                    </a>
                    <form class="btn" method="post" action="{{route('pengumumanAdmin.destroy',$pengumumans->id)}}">
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