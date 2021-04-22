@extends('layouts.master-admin')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-table"></i> List Penalty
              <div class="float-right">
                <a href="/admin/add-penalty" class="btn btn-info">Add Penalty <i _ngcontent-aos-c245="" aria-hidden="true" class="fa fa-plus-circle"></i></a>
              </div>
            </div>
            <div class="container" style="margin-left:20px;"></div>
            <div class="table-responsive"></div>
            <div class="card-body">
              <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Nama Pelanggaran</th>
                        <th>Tanggal Pelanggaran</th>
                        <th>Total Point</th>
                        <th>Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Row-->
@endsection

@section('js')

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#data-table').dataTable({
        autoWidth: true,
        processing: true,
        serverSide: true,
        destroy: true,
        responsive: true,
        stateSave: true,
        order: [],
        ajax: "{{ url('/admin/penalty') }}",
        deferRender: true,
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'usr_name',
                name: 'usr_name'
            },
            {
                data: 'ofc_name',
                name: 'ofc_name'
            },
            {
                data: 'ofs_date',
                name: 'ofs_date'
            },
            {
                data: 'total_point',
                name: 'total_point'
            },
              
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
    });
});

</script>
@endsection
