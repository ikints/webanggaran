@extends('layout.backend')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL('public/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL('public/datatables.net/css/jquery.dataTables.min.css') }}">
@endsection

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
            <div class="box-header padding-bottom-50">
              <h4 class="box-title">Riwayat Revisi Anggaran</h4><br>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="padding-bottom-20">
                  <a href="{{ URL('cms/tni-al/uo/revisi-anggaran') }}" class="btn btn-xs btn-success"><i class="fa fa-list"></i> Lihat Anggaran</a>
                </div>
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-7">
                      <div class="box-body margin-bottom-20 margin-top-10">
                        <table class="table table-border">
                          <tr>
                              <td>Program</td><td>: 012.22.14 - Program Dukungan Kesiapan Matra Darat</td>
                          </tr>
                          <tr>
                              <td>Anggaran Semula</td><td>: 132.991.912</td>
                          </tr>
                          <tr>
                              <td>Anggaran Terakhir</td><td>: 1.132.991.912</td>
                          </tr>
                          <tr>
                              <td>Jumlah Revisi</td><td>: 1</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  
                </div>

                </div>

      			    <div class="padding-bottom-20">
                  <div class="row">
                    <div class="col-md-5"> 
                      Riwayat Revisi Anggaran
                    </div>
                  </div>
        			  	
                </div>
                <table id="tablelist" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Revisi</th>
                    <th>Catatan Revisi</th>
                    <th>Jumlah</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>18/02/2019</td>
                    <td>1</td>
                    <td>Perubahan Pertama</td>
                    <td>1.132.991.912</td>
                  </tr>
                </tbody>
              </table>
            </div>
          <!-- /.box-body -->
        </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

@endsection


@section('extra-js')
<!-- DataTables -->
<script src="{{ URL('public/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL('public/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#tablelist').DataTable();
  })
</script>
@endsection