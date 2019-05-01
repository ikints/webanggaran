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
                            <td>25569269000</td>
                            <td>4784292149</td>
                            <td>20784976851</td>
                            <td>18.71</td>
                          </tr>
                          <tr>
                            <td>521112</td>
                            <td>Belanja pengadaan bahan makanan</td>
                            <td>33933178000</td>
                            <td>6048906825</td>
                            <td>27884271175</td>
                            <td>17.83</td>
                          </tr>
                          <tr>
                            <td>521115</td>
                            <td>Honor Operasional Satuan Kerja</td>
                            <td>126875954000</td>
                            <td>25293496809</td>
                            <td>101582457191</td>
                            <td>19.94</td>
                          </tr>
                          <tr>
                            <td>521119</td>
                            <td>Belanja Barang Operasional Lainnya</td>
                            <td>471151010000</td>
                            <td>62106215342</td>
                            <td>409044794658</td>
                            <td>13.18</td>
                          </tr>
                          <tr>
                            <td>521211</td>
                            <td>Belanja Bahan</td>
                            <td>132114975000</td>
                            <td>16798234284</td>
                            <td>115316740716</td>
                            <td>12.71</td>
                          </tr>
                          <tr>
                            <td>521213</td>
                            <td>Honor Output Kegiatan</td>
                            <td>44011848000</td>
                            <td>6707992725</td>
                            <td>37303855275</td>
                            <td>15.24</td>
                          </tr>
                          <tr>
                            <td>521219</td>
                            <td>Belanja Barang Non Operasional Lainnya</td>
                            <td>95568724000</td>
                            <td>14355738182</td>
                            <td>81212985818</td>
                            <td>15.02</td>
                          </tr>
                          <tr>
                            <td>521811</td>
                            <td>Belanja Barang Persediaan Barang Konsumsi</td>
                            <td>135165160000</td>
                            <td>27382486838</td>
                            <td>107782673162</td>
                            <td>20.26</td>
                          </tr>
                          <tr>
                            <td>521812</td>
                            <td>Belanja Barang Persediaan Amunisi</td>
                            <td>491119676000</td>
                            <td>0</td>
                            <td>491119676000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>521821</td>
                            <td>Belanja Barang Persediaan Bahan Baku</td>
                            <td>975000000</td>
                            <td>175000000</td>
                            <td>800000000</td>
                            <td>17.95</td>
                          </tr>
                          <tr>
                            <td>521822</td>
                            <td>Belanja Barang Persediaan Barang Dalam Proses</td>
                            <td>107005000</td>
                            <td>26701000</td>
                            <td>80304000</td>
                            <td>24.95</td>
                          </tr>
                          <tr>
                            <td>521832</td>
                            <td>Belanja Barang Persediaan Lainnya</td>
                            <td>155804000</td>
                            <td>0</td>
                            <td>155804000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>522111</td>
                            <td>Belanja Langganan Listrik</td>
                            <td>80453213000</td>
                            <td>0</td>
                            <td>80453213000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>522112</td>
                            <td>Belanja Langganan Telepon</td>
                            <td>49809965000</td>
                            <td>49052614</td>
                            <td>49760912386</td>
                            <td>0.10</td>
                          </tr>
                          <tr>
                            <td>522113</td>
                            <td>Belanja Langganan Air</td>
                            <td>13933287000</td>
                            <td>0</td>
                            <td>13933287000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>522119</td>
                            <td>Belanja Langganan Daya dan Jasa Lainnya</td>
                            <td>42786000</td>
                            <td>3800000</td>
                            <td>38986000</td>
                            <td>8.88</td>
                          </tr>
                          <tr>
                            <td>522121</td>
                            <td>Belanja Jasa Pos dan Giro</td>
                            <td>19200000</td>
                            <td>0</td>
                            <td>19200000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>522141</td>
                            <td>Belanja Sewa</td>
                            <td>503520000</td>
                            <td>116875950</td>
                            <td>386644050</td>
                            <td>23.21</td>
                          </tr>
                          <tr>
                            <td>523111</td>
                            <td>Beban Pemeliharaan Gedung dan Bangunan</td>
                            <td>83139681000</td>
                            <td>10377880119</td>
                            <td>72761800881</td>
                            <td>12.48</td>
                          </tr>
                          <tr>
                            <td>523112</td>
                            <td>Belanja Barang Persediaan Pemeliharaan Gedung dan Bangunan</td>
                            <td>3519336000</td>
                            <td>153638025</td>
                            <td>3365697975</td>
                            <td>4.37</td>
                          </tr>
                          <tr>
                            <td>523119</td>
                            <td>Beban Pemeliharaan Gedung dan Bangunan Lainnya</td>
                            <td>1454228000</td>
                            <td>0</td>
                            <td>1454228000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>523121</td>
                            <td>Beban Pemeliharaan Peralatan dan Mesin</td>
                            <td>1278396320000</td>
                            <td>20523813134</td>
                            <td>1257872506866</td>
                            <td>1.61</td>
                          </tr>
                          <tr>
                            <td>523122</td>
                            <td>Beban Bahan Bakar Minyak dan Pelumas (BMP) dan Pelumas Khusus Non Pertamina</td>
                            <td>1244267124000</td>
                            <td>10710280</td>
                            <td>1244256413720</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>523123</td>
                            <td>Belanja Barang Persediaan Pemeliharaan Peralatan dan Mesin</td>
                            <td>3522074987000</td>
                            <td>11713193360</td>
                            <td>3510361793640</td>
                            <td>0.33</td>
                          </tr>
                          <tr>
                            <td>524111</td>
                            <td>Beban Perjalanan Dinas Biasa</td>
                            <td>93086080000</td>
                            <td>12473852260</td>
                            <td>80612227740</td>
                            <td>13.40</td>
                          </tr>
                          <tr>
                            <td>524113</td>
                            <td>Beban Perjalanan Dinas Dalam Kota</td>
                            <td>19180000</td>
                            <td>0</td>
                            <td>19180000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>524114</td>
                            <td>Beban Perjalanan Dinas Paket Meeting Dalam Kota</td>
                            <td>60000000</td>
                            <td>8000000</td>
                            <td>52000000</td>
                            <td>13.33</td>
                          </tr>
                          <tr>
                            <td>524119</td>
                            <td>Beban Perjalanan Dinas Paket Meeting Luar Kota</td>
                            <td>106730000</td>
                            <td>10708032</td>
                            <td>96021968</td>
                            <td>10.03</td>
                          </tr>
                          <tr>
                            <td>524211</td>
                            <td>Beban Perjalanan Dinas Biasa - Luar Negeri</td>
                            <td>13133195000</td>
                            <td>1766866350</td>
                            <td>11366328650</td>
                            <td>13.45</td>
                          </tr>
                          <tr>
                            <td>525111</td>
                            <td>Beban Gaji dan Tunjangan</td>
                            <td>6600000000</td>
                            <td>0</td>
                            <td>6600000000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>525112</td>
                            <td>Beban Barang</td>
                            <td>5989087000</td>
                            <td>0</td>
                            <td>5989087000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>525113</td>
                            <td>Beban Jasa</td>
                            <td>5654417000</td>
                            <td>0</td>
                            <td>5654417000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>525114</td>
                            <td>Beban Pemeliharaan</td>
                            <td>9462562000</td>
                            <td>0</td>
                            <td>9462562000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>525119</td>
                            <td>Beban Penyediaan Barang dan Jasa BLU Lainnya</td>
                            <td>46996199000</td>
                            <td>0</td>
                            <td>46996199000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>525121</td>
                            <td>Belanja Barang Persediaan Barang Konsumsi - BLU</td>
                            <td>49907979000</td>
                            <td>0</td>
                            <td>49907979000</td>
                            <td>0.00</td>
                          </tr>
                          <tr>
                            <td>525129</td>
                            <td>Belanja Barang Persediaan Lainnya - BLU</td>
                            <td>432657000</td>
                            <td>0</td>
                            <td>432657000</td>
                            <td>0.00</td>
                          </tr>
                </tbody>
                <tfoot>
                  <tr>
                            <td></td>
                            <td>TOTAL</td>
                            <td>8065809336000</td>
                            <td>220887454278</td>
                            <td>7844921881722</td>
                            <td>2.74</td>
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