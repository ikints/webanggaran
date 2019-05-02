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
                  <div class="col-md-7">
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
                            <td>1449625560000</td>
                            <td>4849009260</td>
                            <td>1444776550740</td>
                            <td>0.33</td>
                          </tr>
                          <tr>
                            <td>532113</td>
                            <td>Belanja Modal Upah Tenaga Kerja dan Honor Pengelola Teknis Peralatan dan Mesin</td>
                            <td>59611000</td>
                            <td>0</td>
                            <td>59611000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>532115</td>
                            <td>Belanja Modal Perencanaan dan Pengawasan Peralatan dan Mesin</td>
                            <td>9688000</td>
                            <td>0</td>
                            <td>9688000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>533111</td>
                            <td>Belanja Modal Gedung dan Bangunan</td>
                            <td>1044845746000</td>
                            <td>25403022000</td>
                            <td>1019442724000</td>
                            <td>2.43</td>
                          </tr>
                          <tr>
                            <td>533121</td>
                            <td>Belanja Penambahan Nilai Gedung dan Bangunan</td>
                            <td>86987901000</td>
                            <td>1961185000</td>
                            <td>85026716000</td>
                            <td>2.25</td>
                          </tr>
                          <tr>
                            <td>536111</td>
                            <td>Belanja Modal Lainnya</td>
                            <td>152733048000</td>
                            <td>0</td>
                            <td>152733048000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>536121</td>
                            <td>Belanja Penambahan Nilai Aset Tetap Lainnya dan/atau Aset Lainnya</td>
                            <td>175208000</td>
                            <td>0</td>
                            <td>175208000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>537112</td>
                            <td>Belanja Modal Peralatan dan Mesin</td>
                            <td>7963279000</td>
                            <td>0</td>
                            <td>7963279000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>537113</td>
                            <td>Belanja Modal Gedung dan Bangunan</td>
                            <td>8354271000</td>
                            <td>0</td>
                            <td>8354271000</td>
                            <td>0.00</td>
                          </tr>
                </tbody>
                <tfoot>
                  <tr>
                            <td></td>
                            <td>TOTAL</td>
                            <td>2750754312000</td>
                            <td>32213216260</td>
                            <td>2718541095740</td>
                            <td>1.17</td>
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
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#tablelist').DataTable(

        {
          "searching": false,
          "bLengthChange": false,
          dom: 'Bfrtip',
          buttons: [
              'excel', 'pdf'
          ]
        }

      );
  })
</script>
@endsection