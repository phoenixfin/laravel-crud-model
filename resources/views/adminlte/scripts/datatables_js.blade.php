@extends('../master')

@push('data_tables_scripts')
    <script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/adimlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
    $(function () {
        $("#example1").DataTable();
    });
    </script>
@endpush



