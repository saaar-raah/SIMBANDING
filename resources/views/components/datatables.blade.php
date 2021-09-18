@section('css')
    <link href="{{URL('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@push('scripts')
    <script src="{{URL('admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>
@endpush
