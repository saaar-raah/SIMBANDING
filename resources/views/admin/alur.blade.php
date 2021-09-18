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
                                        {{-- <span><img class="mr-2" src="../assets/images/logo-icon.png"
                                                alt="" height="18"><img
                                                src="../assets/images/logo-text.png" alt=""
                                                height="18"></span> --}}
                                    <h3 class="text-dark">Tambah Data</h3>
                                </div>

                                <form  method="POST" action="{{URL::route('alurAdmin.store')}}" class="pl-3 pr-3" enctype="multipart/form-data">
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
                                        <label>Urutan</label>
                                        <input name="urutan" type="text" class="form-control" placeholder="Urutan" required>
                                    </div>

                                    <div class="modal-footer justify-content-center">
                                        <div class="modal-hide" data-backdrop="static" data-keyboard="false">


                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button style="border-radius:15px" class="btn btn-secondary" type="submit">Cancel</button>
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
                    <h4 class="card-title">Alur</h4>
                    <h6 class="card-subtitle">Halaman untuk mengatur informasi alur pengajuan banding.
                    </h6>
                    <div class="btn-list pt-2 pb-2">
                        <!-- Custom width modal -->
                        <button  type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#signup-modal"><p style="font-size: 14px"><strong>New Data</strong></p></button>

                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                            <thead class="thead-primary">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Alur</th>
                                    <th>Isi</th>
                                    <th>Urutan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alur as $alurs)
                                <tr>
                                    <td style="text-align: center;">{{$alurs->id}}</td>
                                    <td style=
                                    "max-width: 15rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!!$alurs->nama_alur!!}</td>
                                    {{-- <td>{!!substr("$alurs->isi",0,40)!!}</td> --}}
                                    <td style=
                                    "max-width: 20rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!!$alurs->isi!!}</td>
                                    <td style="text-align: center;">{{$alurs->urutan}}</td>
                                    <td style="text-align: center;">
                                        <a style="border-radius: 15px" href="{{route('alurAdmin.edit',$alurs->id)}}"
                                            class="btn waves-effect waves-light btn-outline-primary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    <form  class="btn p-0" method="post" action="{{URL::route('alurAdmin.destroy',$alurs->id)}}">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" style="border-radius: 15px;" class="btn waves-effect waves-light btn-outline-secondary">
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
    min_height: 300,
    max_height: 500,
    plugins: 'preview autoresize paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen template codesample charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
    toolbar: 'undo redo | cut copy paste | bold italic underline | strikethrough superscript subscript | fontsizeselect | hr lineheight | ltr rtl | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview ',
    toolbar_mode: 'wrap',
    menubar: false,
    branding: false,  
    });
  tinymce.init({
    selector: "textarea.isi",
    min_height: 300,
    max_height: 500,
    plugins: 'preview autoresize paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen template codesample charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
    toolbar: 'undo redo | cut copy paste | bold italic underline | strikethrough superscript subscript | fontsizeselect | hr lineheight | ltr rtl | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview ',
    toolbar_mode: 'wrap',
    menubar: false,
    branding: false,  
    });
</script>
@endsection