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
              <h4 class="box-title">Rincian Anggaran</h4><br>
              <h3 class="box-title">012.22 - Markas Besar TNI AD</h3><br>
              <h3 class="box-title">Tahun 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="padding-bottom-20">
                  <a href="{{ URL('cms/anggaran') }}" class="btn btn-xs btn-success"><i class="fa fa-list"></i> Anggaran Kementerian</a>
                  <a href="{{ URL('cms/input-anggaran') }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Input Anggaran</a>
                </div>
                <table id="tablelist" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th rowspan="2">Kode Nama Unit</th>
                    <th rowspan="2">Belanja Pegawai (Operasional)</th>
                    <th colspan="2">Belanja Barang</th>
                    <th colspan="2">Belanja Modal</th>
                    <th rowspan="2">Bantuan Sosial</th>
                    <th rowspan="2">Jumlah</th>
                  </tr>
                  <tr>
                    <th>(Operasional)</th>
                    <th>(Non Ops)</th>
                    <th>(Operasional)</th>
                    <th>(Non Ops)</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>012.22 - Markas Besar TNI AD</td>
                    <td>28.920.991.912</td>
                    <td>2.908.765.12</td>
                    <td>8.980.889.321</td>
                    <td>0</td>
                    <td>6.980.778.126</td>
                    <td>0</td>
                    <td>47.980.120.223</td>
                  </tr>
                  <tr>
                    <td>012.22.14 - Program dukungan kesiapan matra darat</td>
                    <td>2.920.991.912</td>
                    <td>1.908.765.12</td>
                    <td>980.889.321</td>
                    <td>0</td>
                    <td>5.980.778.126</td>
                    <td>0</td>
                    <td>17.980.120.223</td>
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