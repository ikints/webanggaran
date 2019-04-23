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
              <h4 class="box-title">Rincian Realisasi Anggaran</h4><br>
              <h3 class="box-title">Kementerian Pertahanan Republik Indonesia</h3><br>
              <h3 class="box-title">Tahun 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="padding-bottom-20">
                  <a href="{{ URL('cms/kotama/realisasi-anggaran') }}" class="btn btn-xs btn-success"><i class="fa fa-list"></i> Lihat Dafar Program</a>
                </div>
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-4">
                      <div class="box-body margin-bottom-20 margin-top-10">
                        <table class="table table-border">
                          <tr>
                            <td>Unit Organisasi</td><td>: 22 - TNI AD</td>
                          </tr>
                          <tr>
                            <td>Kotama</td><td>: 08 - Kodam III/SILIWANGI</td>
                          </tr>
                          <tr>
                            <td>Satuan Kerja</td><td>: ZIDAM III/SLW</td>
                          </tr>
                          <tr>
                            <td>Alokasi</td><td>: Rp. 28.909.920.000</td>
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
                      Riwayat Pencairan Dana
                    </div>
                    <div class="col-md-7">
                      <a href="{{ URL('cms/kotama/tambah-pencairan-dana') }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Tambah Pencairan Dana</a>
                    </div>
                  </div>
        			  	
                </div>
                <table id="tablelist" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Jumlah</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>18/02/2019</td>
                    <td>Pencairan Pertama</td>
                    <td>5.000.000</td>
                  </tr>
                  <tr>
                    <td>18/02/2019</td>
                    <td>Pencairan Kedua</td>
                    <td>2.500.000</td>
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