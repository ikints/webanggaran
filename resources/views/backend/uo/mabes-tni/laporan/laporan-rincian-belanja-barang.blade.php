@extends('layout.backend')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL('public/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL('public/datatables.net/css/jquery.dataTables.min.css') }}">
@endsection

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        
        <div class="box">
            <div class="box-header padding-bottom-10 text-center">
              <h4 class="box-title report-title">LAPORAN PELAKSANAAN ANGGARAN BELANJA BARANG</h4><br>
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
                    <td>6379710000</td>
                    <td>117342889</td>
                    <td>6262367111</td>
                    <td>1.84</td>
                  </tr>
                  <tr>
                    <td>521112</td>
                    <td>Belanja pengadaan bahan makanan</td>
                    <td>3551830000</td>
                    <td>505489000</td>
                    <td>3046341000</td>
                    <td>14.23</td>
                  </tr>
                  <tr>
                    <td>521113</td>
                    <td>Belanja Penambah Daya Tahan Tubuh</td>
                    <td>16412710000</td>
                    <td>2477133000</td>
                    <td>13935577000</td>
                    <td>15.09</td>
                  </tr>
                  <tr>
                    <td>521114</td>
                    <td>Belanja pengiriman surat dinas pos pusat</td>
                    <td>41925000</td>
                    <td>0</td>
                    <td>41925000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>521115</td>
                    <td>Honor Operasional Satuan Kerja</td>
                    <td>62472129000</td>
                    <td>12247752148</td>
                    <td>50224376852</td>
                    <td>19.61</td>
                  </tr>
                  <tr>
                    <td>521119</td>
                    <td>Belanja Barang Operasional Lainnya</td>
                    <td>186799346000</td>
                    <td>21745693511</td>
                    <td>165053652489</td>
                    <td>11.64</td>
                  </tr>
                  <tr>
                    <td>521211</td>
                    <td>Belanja Bahan</td>
                    <td>270161171000</td>
                    <td>20357338385</td>
                    <td>249803832615</td>
                    <td>7.54</td>
                  </tr>
                  <tr>
                    <td>521213</td>
                    <td>Honor Output Kegiatan</td>
                    <td>58064625000</td>
                    <td>6689526500</td>
                    <td>51375098500</td>
                    <td>11.52</td>
                  </tr>
                  <tr>
                    <td>521219</td>
                    <td>Belanja Barang Non Operasional Lainnya</td>
                    <td>155271469000</td>
                    <td>3303317842</td>
                    <td>151968151158</td>
                    <td>2.13</td>
                  </tr>
                  <tr>
                    <td>521811</td>
                    <td>Belanja Barang Persediaan Barang Konsumsi</td>
                    <td>58282700000</td>
                    <td>8208620494</td>
                    <td>50074079506</td>
                    <td>14.08</td>
                  </tr>
                  <tr>
                    <td>521812</td>
                    <td>Belanja Barang Persediaan Amunisi</td>
                    <td>197740000000</td>
                    <td>0</td>
                    <td>197740000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>522111</td>
                    <td>Belanja Langganan Listrik</td>
                    <td>25200938000</td>
                    <td>5460704165</td>
                    <td>19740233835</td>
                    <td>21.67</td>
                  </tr>
                  <tr>
                    <td>522112</td>
                    <td>Belanja Langganan Telepon</td>
                    <td>31367392000</td>
                    <td>23845675</td>
                    <td>31343546325</td>
                    <td>0.08</td>
                  </tr>
                  <tr>
                    <td>522113</td>
                    <td>Belanja Langganan Air</td>
                    <td>2231013000</td>
                    <td>694447000</td>
                    <td>1536566000</td>
                    <td>31.13</td>
                  </tr>
                  <tr>
                    <td>522119</td>
                    <td>Belanja Langganan Daya dan Jasa Lainnya</td>
                    <td>745685000</td>
                    <td>44006000</td>
                    <td>701679000</td>
                    <td>5.90</td>
                  </tr>
                  <tr>
                    <td>522131</td>
                    <td>Belanja Jasa Konsultan</td>
                    <td>64636468000</td>
                    <td>1078924000</td>
                    <td>63557544000</td>
                    <td>1.67</td>
                  </tr>
                  <tr>
                    <td>522141</td>
                    <td>Belanja Sewa</td>
                    <td>20237928000</td>
                    <td>762898000</td>
                    <td>19475030000</td>
                    <td>3.77</td>
                  </tr>
                  <tr>
                    <td>522151</td>
                    <td>Belanja Jasa Profesi</td>
                    <td>12663290000</td>
                    <td>1740075000</td>
                    <td>10923215000</td>
                    <td>13.74</td>
                  </tr>
                  <tr>
                    <td>522191</td>
                    <td>Beban Jasa Lainnya</td>
                    <td>25489054000</td>
                    <td>1293193389</td>
                    <td>24195860611</td>
                    <td>5.07</td>
                  </tr>
                  <tr>
                    <td>523111</td>
                    <td>Beban Pemeliharaan Gedung dan Bangunan</td>
                    <td>39738327000</td>
                    <td>1344650607</td>
                    <td>38393676393</td>
                    <td>3.38</td>
                  </tr>
                  <tr>
                    <td>523121</td>
                    <td>Beban Pemeliharaan Peralatan dan Mesin</td>
                    <td>83275153000</td>
                    <td>4005948054</td>
                    <td>79269204946</td>
                    <td>4.81</td>
                  </tr>
                  <tr>
                    <td>523122</td>
                    <td>Beban Bahan Bakar Minyak dan Pelumas (BMP) dan Pelumas Khusus Non Pertamina</td>
                    <td>24970000000</td>
                    <td>0</td>
                    <td>24970000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523133</td>
                    <td>Beban Pemeliharaan Jaringan</td>
                    <td>5558096000</td>
                    <td>0</td>
                    <td>5558096000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523199</td>
                    <td>Beban Pemeliharaan Lainnya</td>
                    <td>23223000</td>
                    <td>12623000</td>
                    <td>10600000</td>
                    <td>54.36</td>
                  </tr>
                  <tr>
                    <td>524111</td>
                    <td>Beban Perjalanan Dinas Biasa</td>
                    <td>81104977000</td>
                    <td>12126565942</td>
                    <td>68978411058</td>
                    <td>14.95</td>
                  </tr>
                  <tr>
                    <td>524113</td>
                    <td>Beban Perjalanan Dinas Dalam Kota</td>
                    <td>7967070000</td>
                    <td>1372490000</td>
                    <td>6594580000</td>
                    <td>17.23</td>
                  </tr>
                  <tr>
                    <td>524114</td>
                    <td>Beban Perjalanan Dinas Paket Meeting Dalam Kota</td>
                    <td>17393760000</td>
                    <td>3108602000</td>
                    <td>14285158000</td>
                    <td>17.87</td>
                  </tr>
                  <tr>
                    <td>524119</td>
                    <td>Beban Perjalanan Dinas Paket Meeting Luar Kota</td>
                    <td>18239158000</td>
                    <td>2493956000</td>
                    <td>15745202000</td>
                    <td>13.67</td>
                  </tr>
                  <tr>
                    <td>524211</td>
                    <td>Beban Perjalanan Dinas Biasa - Luar Negeri</td>
                    <td>35740548000</td>
                    <td>7341361918</td>
                    <td>28399186082</td>
                    <td>20.54</td>
                  </tr>
                  <tr>
                    <td>524219</td>
                    <td>Beban Perjalanan Dinas Lainnya - Luar Negeri</td>
                    <td>29014831000</td>
                    <td>3474752774</td>
                    <td>25540078226</td>
                    <td>11.98</td>
                  </tr>
                  <tr>
                    <td>526112</td>
                    <td>Beban Peralatan Dan Mesin Untuk Diserahkan Kepada Masyarakat/Pemda</td>
                    <td>1928254000</td>
                    <td>0</td>
                    <td>1928254000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>526115</td>
                    <td>Beban Barang Fisik Lainnya Untuk Diserahkan Kepada Masyarakat/Pemda</td>
                    <td>525099000</td>
                    <td>1199869000</td>
                    <td>-674770000</td>
                    <td>228.50</td>
                  </tr>
                  <tr>
                    <td>526311</td>
                    <td>Beban Barang Bantuan Lainnya Untuk Diserahkan Kepada Masyarakat/Pemda</td>
                    <td>5948229000</td>
                    <td>530639800</td>
                    <td>5417589200</td>
                    <td>8.92</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td>1549176108000</td>
                    <td>123761766093</td>
                    <td>1425414341907</td>
                    <td>7.99</td>
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