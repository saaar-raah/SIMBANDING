@extends('admin.master')

<x-datatables/>

@section('content')

<div class="container-fluid">
    <x-notif/>



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

                                <form  method="POST" action="{{route('alurAdmin.store')}}" class="pl-3 pr-3" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Alur</label>
                                        <textarea name="nama_alur" class="namaalur" placeholder="Masukkan nama alur" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Isi</label>
                                        <textarea name="isi" class="isi" placeholder="Masukkan isi" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input name="link" type="text" class="form-control" placeholder="Isi" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Urutan</label>
                                        <input name="urutan" type="text" class="form-control" placeholder="Urutan" required>
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
                    <h4 class="card-title">ALUR</h4>
                    <h6 class="card-subtitle">VIEW DATA ALUR
                    </h6>
                    <div class="btn-list pt-2 pb-2">
                        <!-- Custom width modal -->
                        <button  type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#signup-modal">Tambah Data</button>

                    </div>
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
                                    <td>{!!$alurs->nama_alur!!}</td>
                                    <td>{!!$alurs->isi!!}</td>
                                    <td>{{$alurs->link}}</td>
                                    <td>{{$alurs->urutan}}</td>
                                    <td>
                                        <button style="border-radius: 15px; color: #fff" class="btn waves-effect waves-light btn-warning">
                                            <a href="{{route('alurAdmin.edit',$alurs->id)}}">
                                                <i class="fas fa-edit" style="color: #FFFF"></i>
                                            </a>Edit
                                            </button>
                                    <form  class="btn" method="post" action="{{route('alurAdmin.destroy',$alurs->id)}}">
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
    selector: "textarea.namaalur",
  });
  tinymce.init({
      selector: "textarea.isi",
  });
</script>
@endsection