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
            <div class="box-header padding-bottom-10 text-center">
              <h4 class="box-title report-title">LAPORAN PELAKSANAAN ANGGARAN BELANJA MODAL</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">PERIODE 1 JANUARI S.D. 31 MARET 2019</h3>
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
                    <th class="text-center">NAMA AKUN</th>
                    <th>ALOKASI DIPA</th>
                    <th>REALISASI SPAN</th>
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
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>532111</td>
                        <td>Belanja Modal Peralatan dan Mesin</td>
                        <td>2026366498000</td>
                        <td>97689975030</td>
                        <td>1928676522970</td>
                        <td>4.82</td>
                      </tr>
                      <tr>
                        <td>532113</td>
                        <td>Belanja Modal Upah Tenaga Kerja dan Honor Pengelola Teknis Peralatan dan Mesin</td>
                        <td>1192415000</td>
                        <td>0</td>
                        <td>1192415000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>532118</td>
                        <td>Belanja Modal Perjalanan Peralatan dan Mesin</td>
                        <td>681284000</td>
                        <td>0</td>
                        <td>681284000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>533111</td>
                        <td>Belanja Modal Gedung dan Bangunan</td>
                        <td>1453400074000</td>
                        <td>99176776297</td>
                        <td>1354223297703</td>
                        <td>6.82</td>
                      </tr>
                      <tr>
                        <td>533121</td>
                        <td>Belanja Penambahan Nilai Gedung dan Bangunan</td>
                        <td>1446823000</td>
                        <td>0</td>
                        <td>1446823000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>536111</td>
                        <td>Belanja Modal Lainnya</td>
                        <td>63519203000</td>
                        <td>7203706234</td>
                        <td>56315496766</td>
                        <td>11.34</td>
                      </tr>
                      <tr>
                        <td>536121</td>
                        <td>Belanja Penambahan Nilai Fisik Lainnya</td>
                        <td>2200000000</td>
                        <td>0</td>
                        <td>2200000000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>537112</td>
                        <td>Belanja Modal Peralatan dan Mesin</td>
                        <td>37937800000</td>
                        <td>0</td>
                        <td>37937800000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>537113</td>
                        <td>Belanja Modal Gedung dan Bangunan</td>
                        <td>4569919000</td>
                        <td>0</td>
                        <td>4569919000</td>
                        <td>0.00</td>
                      </tr>
                </tbody>
                <tfoot>
                  <tr>
                        <td></td>
                        <td>TOTAL</td>
                        <td>3591314016000</td>
                        <td>204070457561</td>
                        <td>3387243558439</td>
                        <td>5.68</td>
                      </tr>
                </tfoot>
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