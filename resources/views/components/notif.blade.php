@if (session('success'))
<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Berhasil! - </strong> Data Berhasil Ditambah!
</div>
@endif
@if (session('delete'))
<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Berhasil! - </strong> Data Berhasil Dihapus!
</div>
@endif
@if (session('edit'))
<div class="alert alert-warning bg-warning text-white border-0" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Berhasil! - </strong> Data Berhasil Edit!
</div>
@endif
