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
                    <td>3513261910000</td>
                    <td>31452793236</td>
                    <td>3481809116764</td>
                    <td>0.90</td>
                  </tr>
                  <tr>
                    <td>532112</td>
                    <td>Belanja Modal Bahan Baku Peralatan dan Mesin</td>
                    <td>520700000</td>
                    <td>0</td>
                    <td>520700000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>532113</td>
                    <td>Belanja Modal Upah Tenaga Kerja dan Honor Pengelola Teknis Peralatan dan Mesin</td>
                    <td>156049000</td>
                    <td>0</td>
                    <td>156049000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>532115</td>
                    <td>Belanja Modal Perencanaan dan Pengawasan Peralatan dan Mesin</td>
                    <td>2758000</td>
                    <td>0</td>
                    <td>2758000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>532118</td>
                    <td>Belanja Modal Perjalanan Peralatan dan Mesin</td>
                    <td>2778000</td>
                    <td>0</td>
                    <td>2778000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>532121</td>
                    <td>Belanja Modal Penambahan Nilai Peralatan dan Mesin</td>
                    <td>6431000</td>
                    <td>0</td>
                    <td>6431000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>533111</td>
                    <td>Belanja Modal Gedung dan Bangunan</td>
                    <td>1493746104000</td>
                    <td>43287530400</td>
                    <td>1450458573600</td>
                    <td>2.90</td>
                  </tr>
                  <tr>
                    <td>533113</td>
                    <td>Belanja Modal Upah Tenaga Kerja dan Honor Pengelola Teknis Gedung dan Bangunan</td>
                    <td>3499000</td>
                    <td>0</td>
                    <td>3499000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>533115</td>
                    <td>Belanja Modal Perencanaan dan Pengawasan Gedung dan Bangunan</td>
                    <td>41437944000</td>
                    <td>1632894968</td>
                    <td>39805049032</td>
                    <td>3.94</td>
                  </tr>
                  <tr>
                    <td>533118</td>
                    <td>Belanja Modal Perjalanan Gedung dan Bangunan</td>
                    <td>1750000</td>
                    <td>0</td>
                    <td>1750000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>533121</td>
                    <td>Belanja Penambahan Nilai Gedung dan Bangunan</td>
                    <td>1580491860000</td>
                    <td>34209249800</td>
                    <td>1546282610200</td>
                    <td>2.16</td>
                  </tr>
                  <tr>
                    <td>534111</td>
                    <td>Belanja Modal Jalan dan Jembatan</td>
                    <td>85578854000</td>
                    <td>0</td>
                    <td>85578854000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>534115</td>
                    <td>Belanja Modal Perencanaan dan Pengawasan Jalan dan Jembatan</td>
                    <td>277699000</td>
                    <td>0</td>
                    <td>277699000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>534121</td>
                    <td>Belanja Modal Irigasi</td>
                    <td>6870000000</td>
                    <td>0</td>
                    <td>6870000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>534131</td>
                    <td>Belanja Modal Jaringan</td>
                    <td>1560000000</td>
                    <td>0</td>
                    <td>1560000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>536111</td>
                    <td>Belanja Modal Lainnya</td>
                    <td>17674636000</td>
                    <td>1330789500</td>
                    <td>16343846500</td>
                    <td>7.53</td>
                  </tr>
                  <tr>
                    <td>536121</td>
                    <td>Belanja Penambahan Nilai Fisik Lainnya</td>
                    <td>2958814000</td>
                    <td>817874950</td>
                    <td>2140939050</td>
                    <td>27.64</td>
                  </tr>
                  <tr>
                    <td>537112</td>
                    <td>Belanja Modal Peralatan dan Mesin</td>
                    <td>76563592000</td>
                    <td>0</td>
                    <td>76563592000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>537113</td>
                    <td>Belanja Modal Gedung dan Bangunan</td>
                    <td>34462351000</td>
                    <td>0</td>
                    <td>34462351000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>537114</td>
                    <td>Belanja Modal Jalan, Irigasi dan Jaringan</td>
                    <td>1200000000</td>
                    <td>0</td>
                    <td>1200000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>537115</td>
                    <td>Belanja Modal Fisik Lainnya</td>
                    <td>34000000000</td>
                    <td>0</td>
                    <td>34000000000</td>
                    <td>0.00</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td>6890777729000</td>
                    <td>112731132854</td>
                    <td>6778046596146</td>
                    <td>1.64</td>
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