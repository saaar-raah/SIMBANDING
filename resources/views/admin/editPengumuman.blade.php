@extends('admin.master')
@section('content')
{{-- <div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit pengumuman</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Tambah pengumuman</li>
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
                    <h4 class="card-title">Edit pengumuman</h4>
                    <form method="POST" action="{{URL::route('pengumumanAdmin.update',$pengumuman->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        {{-- <input type="text" name="judul" class="form-control" value="{{$pengumuman->judul}}"> --}}
                                        <textarea name="judul" class="judul" placeholder="judul">
                                            {!!$pengumuman->judul!!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label>Isi</label>
                                        {{-- <input name="isi" type="text" class="form-control" value="{{$pengumuman->isi}}"> --}}
                                        <textarea name="isi" class="isi" placeholder="isi">
                                            {!!$pengumuman->isi!!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <div class="">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">{{$pengumuman->foto}}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Penulis</label>
                                        <input name="penulis" type="text" class="form-control" value="{{$pengumuman->penulis}}">
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