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
              <h4 class="box-title report-title">LAPORAN PELAKSANAAN ANGGARAN BELANJA BARANG</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">PERIODE 1 JANUARI S.D. 31 MARET 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-4">
                      <div class="box-body">
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
                        <td>521111</td>
                        <td>Belanja Keperluan Perkantoran</td>
                        <td>3016627000</td>
                        <td>5850000</td>
                        <td>3010777000</td>
                        <td>0.19</td>
                      </tr>
                      <tr>
                        <td>521112</td>
                        <td>Belanja pengadaan bahan makanan</td>
                        <td>78711823000</td>
                        <td>11199029850</td>
                        <td>67512793150</td>
                        <td>14.23</td>
                      </tr>
                      <tr>
                        <td>521113</td>
                        <td>Belanja Penambah Daya Tahan Tubuh</td>
                        <td>20000000</td>
                        <td>0</td>
                        <td>20000000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>521114</td>
                        <td>Belanja pengiriman surat dinas pos pusat</td>
                        <td>5469000000</td>
                        <td>763198648</td>
                        <td>4705801352</td>
                        <td>13.95</td>
                      </tr>
                      <tr>
                        <td>521115</td>
                        <td>Honor Operasional Satuan Kerja</td>
                        <td>67846714000</td>
                        <td>7028316683</td>
                        <td>60818397317</td>
                        <td>10.36</td>
                      </tr>
                      <tr>
                        <td>521119</td>
                        <td>Belanja Barang Operasional Lainnya</td>
                        <td>639214544000</td>
                        <td>28210603507</td>
                        <td>611003940493</td>
                        <td>4.41</td>
                      </tr>
                      <tr>
                        <td>521211</td>
                        <td>Belanja Bahan</td>
                        <td>292900109000</td>
                        <td>36851908286</td>
                        <td>256048200714</td>
                        <td>12.58</td>
                      </tr>
                      <tr>
                        <td>521213</td>
                        <td>Honor Output Kegiatan</td>
                        <td>273807408000</td>
                        <td>19444156335</td>
                        <td>254363251665</td>
                        <td>7.10</td>
                      </tr>
                      <tr>
                        <td>521219</td>
                        <td>Belanja Barang Non Operasional Lainnya</td>
                        <td>295539969000</td>
                        <td>33361668585</td>
                        <td>262178300415</td>
                        <td>11.29</td>
                      </tr>
                      <tr>
                        <td>521811</td>
                        <td>Belanja Barang Persediaan Barang Konsumsi</td>
                        <td>148274051000</td>
                        <td>24743948514</td>
                        <td>123530102486</td>
                        <td>16.69</td>
                      </tr>
                      <tr>
                        <td>521812</td>
                        <td>Belanja Barang Persediaan Amunisi</td>
                        <td>286410750000</td>
                        <td>10556730800</td>
                        <td>275854019200</td>
                        <td>3.69</td>
                      </tr>
                      <tr>
                        <td>521822</td>
                        <td>Belanja Barang Persediaan barang dalam proses</td>
                        <td>1087065000</td>
                        <td>0</td>
                        <td>1087065000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>521832</td>
                        <td>Belanja Barang Persediaan Lainnya</td>
                        <td>5130336000</td>
                        <td>189817000</td>
                        <td>4940519000</td>
                        <td>3.70</td>
                      </tr>
                      <tr>
                        <td>522111</td>
                        <td>Belanja Langganan Listrik</td>
                        <td>142132276000</td>
                        <td>15711758</td>
                        <td>142116564242</td>
                        <td>0.01</td>
                      </tr>
                      <tr>
                        <td>522112</td>
                        <td>Belanja Langganan Telepon</td>
                        <td>48217263000</td>
                        <td>111145114</td>
                        <td>48106117886</td>
                        <td>0.23</td>
                      </tr>
                      <tr>
                        <td>522113</td>
                        <td>Belanja Langganan Air</td>
                        <td>35002867000</td>
                        <td>57528560</td>
                        <td>34945338440</td>
                        <td>0.16</td>
                      </tr>
                      <tr>
                        <td>522119</td>
                        <td>Belanja Langganan Daya dan Jasa Lainnya</td>
                        <td>1389232000</td>
                        <td>82226443</td>
                        <td>1307005557</td>
                        <td>5.92</td>
                      </tr>
                      <tr>
                        <td>522141</td>
                        <td>Belanja Sewa</td>
                        <td>19245351000</td>
                        <td>964149989</td>
                        <td>18281201011</td>
                        <td>5.01</td>
                      </tr>
                      <tr>
                        <td>522151</td>
                        <td>Belanja Jasa Profesi</td>
                        <td>44248358000</td>
                        <td>9528299971</td>
                        <td>34720058029</td>
                        <td>21.53</td>
                      </tr>
                      <tr>
                        <td>522191</td>
                        <td>Beban Jasa Lainnya</td>
                        <td>73485162000</td>
                        <td>14299086545</td>
                        <td>59186075455</td>
                        <td>19.46</td>
                      </tr>
                      <tr>
                        <td>523111</td>
                        <td>Beban Pemeliharaan Gedung dan Bangunan</td>
                        <td>163280283000</td>
                        <td>11412219582</td>
                        <td>151868063418</td>
                        <td>6.99</td>
                      </tr>
                      <tr>
                        <td>523112</td>
                        <td>Belanja Barang Persediaan Pemeliharaan Gedung dan Bangunan</td>
                        <td>11400000</td>
                        <td>0</td>
                        <td>11400000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>523119</td>
                        <td>Beban Pemeliharaan Gedung dan Bangunan Lainnya</td>
                        <td>23582134000</td>
                        <td>0</td>
                        <td>23582134000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>523121</td>
                        <td>Beban Pemeliharaan Peralatan dan Mesin</td>
                        <td>2504665874000</td>
                        <td>150376704876</td>
                        <td>2354289169124</td>
                        <td>6.00</td>
                      </tr>
                      <tr>
                        <td>523122</td>
                        <td>Beban Bahan Bakar Minyak dan Pelumas (BMP) dan Pelumas Khusus Non Pertamina</td>
                        <td>2064175791000</td>
                        <td>5839500</td>
                        <td>2064169951500</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>523133</td>
                        <td>Beban Pemeliharaan Jaringan</td>
                        <td>100000000</td>
                        <td>0</td>
                        <td>100000000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>523199</td>
                        <td>Beban Pemeliharaan Lainnya</td>
                        <td>120730528000</td>
                        <td>4831860010</td>
                        <td>115898667990</td>
                        <td>4.00</td>
                      </tr>
                      <tr>
                        <td>524111</td>
                        <td>Beban Perjalanan Dinas Biasa</td>
                        <td>190026598000</td>
                        <td>17227347623</td>
                        <td>172799250377</td>
                        <td>9.07</td>
                      </tr>
                      <tr>
                        <td>524119</td>
                        <td>Beban Perjalanan Dinas Paket Meeting Luar Kota</td>
                        <td>7022380000</td>
                        <td>8800000</td>
                        <td>7013580000</td>
                        <td>0.13</td>
                      </tr>
                      <tr>
                        <td>524211</td>
                        <td>Beban Perjalanan Dinas Biasa - Luar Negeri</td>
                        <td>7776654000</td>
                        <td>1423922019</td>
                        <td>6352731981</td>
                        <td>18.31</td>
                      </tr>
                      <tr>
                        <td>524219</td>
                        <td>Beban Perjalanan Dinas Lainnya - Luar Negeri</td>
                        <td>14509891000</td>
                        <td>1046430900</td>
                        <td>13463460100</td>
                        <td>7.21</td>
                      </tr>
                      <tr>
                        <td>525112</td>
                        <td>Beban Barang</td>
                        <td>168679570000</td>
                        <td>0</td>
                        <td>168679570000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>525113</td>
                        <td>Beban Jasa</td>
                        <td>873207000</td>
                        <td>0</td>
                        <td>873207000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>525114</td>
                        <td>Beban Pemeliharaan</td>
                        <td>26062965000</td>
                        <td>0</td>
                        <td>26062965000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>525115</td>
                        <td>Beban Perjalanan</td>
                        <td>647262000</td>
                        <td>0</td>
                        <td>647262000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>525121</td>
                        <td>Belanja Barang Persediaan Barang Konsumsi - BLU</td>
                        <td>106960511000</td>
                        <td>0</td>
                        <td>106960511000</td>
                        <td>0.00</td>
                      </tr>
                </tbody>
                <tfoot>
                  <tr>
                        <td></td>
                        <td>TOTAL</td>
                        <td>7860253953000</td>
                        <td>383746501098</td>
                        <td>7476507451902</td>
                        <td>4.88</td>
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
    $('#tablelist').DataTable(

        {
          "searching": false,
          "bLengthChange": false,
        }

      );
  })
</script>
@endsection