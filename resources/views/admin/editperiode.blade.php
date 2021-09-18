@extends('admin.master')
@section('content')
{{-- <div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit periode</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Tambah periode</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected="">Aug 19</option>
                    <option value="1">July 19</option>
                    <option value="2">Jun 19</option>
                </select>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Periode</h4>
                    <form method="POST" action="{{URL::route('periodeAdmin.update',$periode->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <textarea name="judul" class="judul" placeholder="judul">
                                            {!!$periode->judul!!}
                                        </textarea>
                                    </div>
                                </div>
                                {{-- <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-11">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row ml-1 mr-1 justify-content-between">
                                <div class="col-md-5 pl-0">
                                    <div class="form-group">
                                        <label>Tanggal Awal</label><br>
                                        <input name="tanggal_awal" class="form-control" value="{{$periode->tanggal_awal}}" type="date">
                                    </div>
                                </div>
                                <div class="col-md-5 pr-0">
                                    <div class="form-group">
                                        <label>Tanggal Akhir</label> <br>
                                        <input name="tanggal_akhir" class="form-control" type="date" value="{{$periode->tanggal_akhir}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src='https://cdn.tiny.cloud/1/1c1ffy2lfue3xw9hm1dl4iopopu0tjwwtk19iihkcl871ajo/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
    tinymce.init({
        selector: "textarea.judul",
        min_height: 300,
        max_height: 500,
        plugins: 'preview autoresize paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen template codesample charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
        toolbar: 'undo redo | cut copy paste | bold italic underline | strikethrough superscript subscript | fontsizeselect | hr lineheight | ltr rtl | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview ',
        toolbar_mode: 'wrap',
        menubar: false,
        branding: false,    });
    tinymce.init({
        selector: "textarea.isi",
        min_height: 300,
        max_height: 500,
        plugins: 'preview autoresize paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen template codesample charmap hr nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
        toolbar: 'undo redo | cut copy paste | bold italic underline | strikethrough superscript subscript | fontsizeselect | hr lineheight | ltr rtl | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | charmap emoticons | fullscreen  preview ',
        toolbar_mode: 'wrap',
        menubar: false,
        branding: false,    });
  </script>
@endpush
@endsection