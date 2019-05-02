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
              <h4 class="box-title report-title">Laporan Pelaksanaan Anggaran Belanja Pegawai</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">PERIODE 1 JANUARI S.D. 31 MARET 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-7">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td>Unit Organisasi</td><td>: 22 - {{Session::get('status_user')}}</td>
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
                    <td>521111</td>
                    <td>Belanja Keperluan Perkantoran</td>
                    <td>23679574000</td>
                    <td>2509964519</td>
                    <td>21169609481</td>
                    <td>10.60</td>
                  </tr>
                  <tr>
                    <td>521113</td>
                    <td>Belanja Penambah Daya Tahan Tubuh</td>
                    <td>81765269000</td>
                    <td>430893750</td>
                    <td>81334375250</td>
                    <td>0.53</td>
                  </tr>
                  <tr>
                    <td>521115</td>
                    <td>Honor Operasional Satuan Kerja</td>
                    <td>1794470000</td>
                    <td>54500000</td>
                    <td>1739970000</td>
                    <td>3.04</td>
                  </tr>
                  <tr>
                    <td>521116</td>
                    <td>Belanja Keperluan Perkantoran Atase Pertahanan Luar Negeri</td>
                    <td>89944262000</td>
                    <td>20507569443</td>
                    <td>69436692557</td>
                    <td>22.80</td>
                  </tr>
                  <tr>
                    <td>521119</td>
                    <td>Belanja Barang Operasional Lainnya</td>
                    <td>554617137000</td>
                    <td>111568324011</td>
                    <td>443048812989</td>
                    <td>20.12</td>
                  </tr>
                  <tr>
                    <td>521211</td>
                    <td>Belanja Bahan</td>
                    <td>1184168678000</td>
                    <td>196223164583</td>
                    <td>987945513417</td>
                    <td>16.57</td>
                  </tr>
                  <tr>
                    <td>521213</td>
                    <td>Honor Output Kegiatan</td>
                    <td>277854167000</td>
                    <td>36249353920</td>
                    <td>241604813080</td>
                    <td>13.05</td>
                  </tr>
                  <tr>
                    <td>521219</td>
                    <td>Belanja Barang Non Operasional Lainnya</td>
                    <td>1762705009000</td>
                    <td>74991680460</td>
                    <td>1687713328540</td>
                    <td>4.25</td>
                  </tr>
                  <tr>
                    <td>521811</td>
                    <td>Belanja Barang Persediaan Barang Konsumsi</td>
                    <td>14200109000</td>
                    <td>1465948675</td>
                    <td>12734160325</td>
                    <td>10.32</td>
                  </tr>
                  <tr>
                    <td>521812</td>
                    <td>Belanja Barang Persediaan Amunisi</td>
                    <td>261519333000</td>
                    <td>0</td>
                    <td>261519333000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>522111</td>
                    <td>Belanja Langganan Listrik</td>
                    <td>57074659000</td>
                    <td>0</td>
                    <td>57074659000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>522112</td>
                    <td>Belanja Langganan Telepon</td>
                    <td>6380111000</td>
                    <td>0</td>
                    <td>6380111000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>522113</td>
                    <td>Belanja Langganan Air</td>
                    <td>7915244000</td>
                    <td>4837160000</td>
                    <td>3078084000</td>
                    <td>61.11</td>
                  </tr>
                  <tr>
                    <td>522119</td>
                    <td>Belanja Langganan Daya dan Jasa Lainnya</td>
                    <td>40196138000</td>
                    <td>0</td>
                    <td>40196138000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>522141</td>
                    <td>Belanja Sewa</td>
                    <td>30610190000</td>
                    <td>5756988000</td>
                    <td>24853202000</td>
                    <td>18.81</td>
                  </tr>
                  <tr>
                    <td>522151</td>
                    <td>Belanja Jasa Profesi</td>
                    <td>1366250000</td>
                    <td>95000000</td>
                    <td>1271250000</td>
                    <td>6.95</td>
                  </tr>
                  <tr>
                    <td>523111</td>
                    <td>Beban Pemeliharaan Gedung dan Bangunan</td>
                    <td>41537052000</td>
                    <td>1998800646</td>
                    <td>39538251354</td>
                    <td>4.81</td>
                  </tr>
                  <tr>
                    <td>523119</td>
                    <td>Beban Pemeliharaan Gedung dan Bangunan Lainnya</td>
                    <td>40601916000</td>
                    <td>2030553000</td>
                    <td>38571363000</td>
                    <td>5.00</td>
                  </tr>
                  <tr>
                    <td>523121</td>
                    <td>Beban Pemeliharaan Peralatan dan Mesin</td>
                    <td>122793008000</td>
                    <td>8994630346</td>
                    <td>113798377654</td>
                    <td>7.33</td>
                  </tr>
                  <tr>
                    <td>523122</td>
                    <td>Beban Bahan Bakar Minyak dan Pelumas (BMP) dan Pelumas Khusus Non Pertamina</td>
                    <td>668380015000</td>
                    <td>0</td>
                    <td>668380015000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523123</td>
                    <td>Belanja Barang Persediaan Pemeliharaan Peralatan dan Mesin</td>
                    <td>28100000000</td>
                    <td>0</td>
                    <td>28100000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523129</td>
                    <td>Beban Pemeliharaan Peralatan dan Mesin Lainnya</td>
                    <td>39055543000</td>
                    <td>323500000</td>
                    <td>38732043000</td>
                    <td>0.83</td>
                  </tr>
                  <tr>
                    <td>523131</td>
                    <td>Beban Pemeliharaan Jalan dan Jembatan</td>
                    <td>256965000</td>
                    <td>0</td>
                    <td>256965000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523191</td>
                    <td>Belanja Barang Persediaan Pemeliharaan Lainnya</td>
                    <td>900000000</td>
                    <td>0</td>
                    <td>900000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523199</td>
                    <td>Beban Pemeliharaan Lainnya</td>
                    <td>20579200000</td>
                    <td>1293211500</td>
                    <td>19285988500</td>
                    <td>6.28</td>
                  </tr>
                  <tr>
                    <td>524111</td>
                    <td>Beban Perjalanan Dinas Biasa</td>
                    <td>145281408000</td>
                    <td>11549523635</td>
                    <td>133731884365</td>
                    <td>7.95</td>
                  </tr>
                  <tr>
                    <td>524113</td>
                    <td>Beban Perjalanan Dinas Dalam Kota</td>
                    <td>1837306000</td>
                    <td>287550000</td>
                    <td>1549756000</td>
                    <td>15.65</td>
                  </tr>
                  <tr>
                    <td>524114</td>
                    <td>Beban Perjalanan Dinas Paket Meeting Dalam Kota</td>
                    <td>3302884000</td>
                    <td>679990000</td>
                    <td>2622894000</td>
                    <td>20.59</td>
                  </tr>
                  <tr>
                    <td>524119</td>
                    <td>Beban Perjalanan Dinas Paket Meeting Luar Kota</td>
                    <td>3619824000</td>
                    <td>0</td>
                    <td>3619824000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>524211</td>
                    <td>Beban Perjalanan Dinas Biasa - Luar Negeri</td>
                    <td>20457834000</td>
                    <td>232082672</td>
                    <td>20225751328</td>
                    <td>1.13</td>
                  </tr>
                  <tr>
                    <td>524212</td>
                    <td>Beban Perjalanan Dinas Tetap - Luar Negeri</td>
                    <td>35021955000</td>
                    <td>2398118000</td>
                    <td>32623837000</td>
                    <td>6.85</td>
                  </tr>
                  <tr>
                    <td>524219</td>
                    <td>Beban Perjalanan Dinas Lainnya - Luar Negeri</td>
                    <td>12059473000</td>
                    <td>1621390240</td>
                    <td>10438082760</td>
                    <td>13.44</td>
                  </tr>
                  <tr>
                    <td>526115</td>
                    <td>Beban Barang Fisik Lainnya Untuk Diserahkan Kepada Masyarakat/Pemda</td>
                    <td>26844088000</td>
                    <td>355320000</td>
                    <td>26488768000</td>
                    <td>1.32</td>
                  </tr>
                  
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td>5606419071000</td>
                    <td>486455217400</td>
                    <td>5119963853600</td>
                    <td>8.68</td>
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