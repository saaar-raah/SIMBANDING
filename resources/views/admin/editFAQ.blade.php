@extends('admin.master')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit FAQ</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Tambah FAQ</li>
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit FAQ</h4>
                    <form method="POST" action="{{route('FAQAdmin.update',$FAQ->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        <textarea name="pertanyaan" class="pertanyaan" placeholder="Pertanyaan">{{ $FAQ->pertanyaan }}</textarea>
                                    </div>
                                </div>
                                {{-- <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-11">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Jawaban</label>
                                        <textarea name="jawaban" class="jawaban" placeholder="Jawaban">{{ $FAQ->jawaban }}</textarea>
                                    </div>
                                </div>
                                {{-- <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Label</label>
                                        <input type="text" class="form-control" placeholder="col-md-10">
                                    </div>
                                </div> --}}
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

<script src="https://cdn.tiny.cloud/1/1c1ffy2lfue3xw9hm1dl4iopopu0tjwwtk19iihkcl871ajo/tinymce/5/tinymce.min.js"
  referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: "textarea.pertanyaan",
  });
  tinymce.init({
    selector: "textarea.jawaban",
  });
</script>
@endsection