@extends('layout.frontend')

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
            <div class="box-header padding-bottom-50 text-center">
              <h4 class="box-title">Laporan Pelaksanaan</h4><br>
              <h3 class="box-title">Anggaran Belanja Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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


                <table id="tablelist" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>KODE</th>
                    <th class="text-center">PROGRAM/KEGIATAN/OUTPUT/SUB OUTPUT/<br>KOMPONEN/SUB KOMPONEN/AKUN/DETAIL</th>
                    <th>VOLUME</th>
                    <th>HARGA SATUAN</th>
                    <th>ALOKASI</th>
                    <th>REALISASI</th>
                    <th>SISA</th>
                    <th>%</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>                 
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>5111</td>
                    <td>Belanja Gaji dan Tunjangan PNS</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>                 
                  </tr>
                  <tr>
                    <td>5113</td>
                    <td>Belanja Gaji dan Tunjangan Pejabat Negara</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>                 
                  </tr>
                  
                </tbody>
              </table>
            </div>
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