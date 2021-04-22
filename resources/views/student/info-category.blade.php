@extends('layouts.master-student')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    
    <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-table"></i> Data Kategori
            
            </div>
            <div class="container" style="margin-left:20px;"></div>
            <div class="table-responsive"></div>
            <div class="card-body">
              <table id="data-table" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama pelanggaran</th>
                    <th>point</th>
              
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
          ajax: "/student/list-student",
          deferRender: true,
          columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                  },
                  {
                    data: 'ofc_name',
                    name: 'ofc_name'
                  },
                  {
                    data: 'ofc_point',
                    name: 'ofc_point'
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
