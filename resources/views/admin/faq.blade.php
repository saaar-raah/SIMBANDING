@extends('admin.master')

<x-datatables/>

@section('content')





    <div class="row">
        {{-- <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">View FAQ</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">View FAQ</li>
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

                {{-- <h4 class="card-title">Tambah Data</h4>

                <p class="text-muted">
                    Tambah Data FAQ
                </p> --}}

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

                                <form  method="POST" action="{{URL::route('FAQAdmin.store')}}" class="pl-3 pr-3" action="#">
                                    @csrf
                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        {{-- <input type="text" name="pertanyaan" class="form-control" placeholder="Pertanyaan"> --}}
                                        <textarea name="pertanyaan" class="pertanyaan" placeholder="Pertanyaan" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban</label>
                                        {{-- <input name="jawaban" type="text" class="form-control" placeholder="Jawaban"> --}}
                                        <textarea name="jawaban" class="jawaban" placeholder="Jawaban" ></textarea>
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
                    <h4 class="card-title">Frequently Asked Question</h4>
                    <h6 class="card-subtitle">Halaman untuk mengatur pertanyaan yang sering ditanyakan oleh pengguna.
                    </h6>

                    <div class="btn-list pt-2 pb-2">
                        <!-- Custom width modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#signup-modal"><p style="font-size: 14px"><strong>New Data</strong></p></button>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="table table-sm-td table-hover table-striped table-bordered no-wrap">
                            <thead class="thead-primary">
                                <tr>
                                    <th>No.</th>
                                    <th>Pertanyaan</th>
                                    <th>Jawaban</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($FAQ as $FAQS)
                                <tr>
                                    <td style="text-align: center;">{{ $FAQS->id}}</td>
                                    <td style=
                                    "max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!!substr("$FAQS->pertanyaan",0,49)!!}</td>
                                    <td style=
                                    "max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">{!!substr("$FAQS->jawaban",0,49)!!}</td>
                                    <td style="text-align: center;">
                                    {{-- <a href="{{route('FAQAdmin.edit',$FAQS->id)}}" style="border-radius: 15px;" class="btn waves-effect waves-light btn-warning">
                                        <i class="fas fa-edit"> EDIT</i>
                                    </a> --}}
                                    <a style="border-radius: 15px" href="{{URL::route('FAQAdmin.edit',$FAQS->id)}}"
                                        class="btn waves-effect waves-light btn-outline-primary pt-1 pb-1">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form  class="btn p-0" method="post" action="{{URL::route('FAQAdmin.destroy',$FAQS->id)}}">
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
                                    <th>PERTANYAAN</th>
                                    <th>JAWABAN</th>
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
    selector: "textarea.pertanyaan",
    min_height: 300,
    max_height: 500,
    plugins: 'preview autoresize paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen template codesample charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
    toolbar: 'undo redo | cut copy paste | bold italic underline | strikethrough superscript subscript | fontsizeselect | hr lineheight | ltr rtl | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview ',
    toolbar_mode: 'wrap',
    menubar: false,
    branding: false,
  });
  tinymce.init({
      selector: "textarea.jawaban",
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