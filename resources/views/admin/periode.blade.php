@extends('admin.master')

<x-datatables/>

@section('content')






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

                                <form  method="POST" action="{{URL::route('periodeAdmin.store')}}" class="pl-3 pr-3" action="#" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Judul</label>
                                        {{-- <input type="text" name="judul" class="form-control" placeholder="judul"> --}}
                                        <textarea name="judul" class="judul" placeholder="Masukkan Judul"></textarea>
                                    </div>
                                    <div class="row ml-1 mr-1 justify-content-between">
                                        <div class="col-md-5 pl-0">
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label><br>
                                                {{-- <input name="isi" type="text" class="form-control" placeholder="isi"> --}}
                                                <input type="date" class="form-control" name="tanggal_awal">
                                            </div>
                                        </div>
                                        <div class="col-md-5 pr-0">
                                            <div class="form-group">
                                                <label>Tanggal Akhir</label><br>
                                                <input type="date" class="form-control" name="tanggal_akhir">
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" class="form-control" type="submit">Submit</button>
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
                    <h4 class="card-title">Periode</h4>
                    <h6 class="card-subtitle">Halaman untuk mengatur informasi periode yang dibutuhkan.
                    </h6>
                    <div class="btn-list  pt-2 pb-2">
                        <!-- Custom width modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#signup-modal"><p style="font-size: 14px"><strong>New Data</strong></p></button>

                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                            <thead class="thead-primary">
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal Awal</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($periode as $item)
                                <tr>
                                    <td style="text-align: center;">{{$item->id}}</td>
                                    <td style=
                                    "max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!!$item->judul!!}</td>
                                    <td style=
                                    "max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!!$item->tanggal_awal!!}</td>
                                    <td>{!! $item->tanggal_akhir !!}</td>
                                    <td style="text-align: center;">
                                    <a style="border-radius: 15px" href="{{route('periodeAdmin.edit',$item->id)}}"
                                        class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form  class="btn p-0" method="post" action="{{URL::route('periodeAdmin.destroy',$item->id)}}">
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
    min_height: 300,
    max_height: 500,
    plugins: 'preview autoresize paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen template codesample charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
    toolbar: 'undo redo | cut copy paste | bold italic underline | strikethrough superscript subscript | fontsizeselect | hr lineheight | ltr rtl | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview ',
    toolbar_mode: 'wrap',
    menubar: false,
    branding: false,  });
  tinymce.init({
    selector: "textarea.isi",
     });
</script>
@endsection