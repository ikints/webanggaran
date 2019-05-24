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
              <h4 class="box-title report-title">Laporan Realisasi Anggaran Belanja Menurut Sumber Dana</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">UNTUK PERIODE YANG BERAKHIR 31 DESEMBER 2019</h3>
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
                            <td style="padding: 0px;">KEMENTERIAN NEGARA/LEMBAGA</td>
                            <td style="padding: 0px;">: 012 - {{Session::get('status_user')}}</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">ESELON</td>
                            <td style="padding: 0px;">: 01 - KEMENTERIAN PERTAHANAN</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <div class="col-md-5">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td style="padding: 0px;">Kode Lap</td>
                            <td style="padding: 0px;">: LRA.P.E1.2</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Tanggal</td>
                            <td style="padding: 0px;">: 11/02/19 11:30 PM</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Halaman</td>
                            <td style="padding: 0px;">: 2</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Prg ID</td>
                            <td style="padding: 0px;">: lap_09</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                  
                </div>

                </div>


                <table id="tablelist" class="table table-striped">
                  <thead>
                  <tr>
                    <th rowspan="2">KODE</th>
                    <th rowspan="2">URAIAN</th>
                    <th rowspan="2">ANGGARAN SEMULA</th>
                    <th rowspan="2">ANGGARAN SETELAH REVISI</th>
                    <th colspan="3" class="text-center">REALISASI BELANJA</th>
                    <th rowspan="2">%REALISASI ANGGARAN</th>
                    <th rowspan="2">SISA ANGGARAN</th>
                  </tr>
                  <tr>
                    <th class="text-center">BELANJA</th>
                    <th class="text-center">PENGEMBALIAN BELANJA</th>
                    <th class="text-center">BELANJA NETTO</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7=5+6</td>
                    <td>8=5/4</td>
                    <td>9=4-7</td>                
                  </tr>
                <tr>
                  <td>01</td>
                  <td>Rupiah murni</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>01</td>
                  <td>Program dukungan manajemen</td>
                  <td>9.863.803.000</td>
                  <td>9.463.803.000</td>
                  <td>8.863803.000</td>
                  <td>6.768</td>
                  <td>8.463.803.000</td>
                  <td>62.71</td>
                  <td>203.000</td>
                </tr>
                <tr>
                  <td>0111</td>
                  <td>Program sistem informasi</td>
                  <td>3.803.000</td>
                  <td>4.803.000</td>
                  <td>4.803.000</td>
                  <td>3.768</td>
                  <td>6.463.803.000</td>
                  <td>22.71</td>
                  <td>3.000</td>
                </tr>
                <tr>
                  <td>0112</td>
                  <td>Pelayanan dan pembinaan keuangan pertahanan</td>
                  <td>4.803.000</td>
                  <td>5.803.000</td>
                  <td>6.803.000</td>
                  <td>7.768</td>
                  <td>3.463.803.000</td>
                  <td>89.71</td>
                  <td>1.000</td>
                </tr>
                <tr>
                  <td>0113</td>
                  <td>Pelayanan berbadan hukum</td>
                  <td>2.803.000</td>
                  <td>4.664.000</td>
                  <td>3.803.000</td>
                  <td>2.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0114</td>
                  <td>Pelayanan Rehabilitasi</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>3.768</td>
                  <td>8.463.803.000</td>
                  <td>4.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0115</td>
                  <td>Dukungan pelayanan umum uo kemhan</td>
                  <td>3.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>3.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0116</td>
                  <td>Dukungan peningkatan suara dan pelaksanaan aparatur uo kemhan</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0117</td>
                  <td>Dukungan peminaan dan pengelolaan</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>3.803.000</td>
                  <td>2.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>3.000</td>
                </tr>
                <tr>
                  <td>0118</td>
                  <td>Dukungan pembinaan dan pengembangan program</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>2.463.803.000</td>
                  <td>86.71</td>
                  <td>3.000</td>
                </tr>
                <tr>
                  <td>0119</td>
                  <td>Dukungan administrasi pelayanan pimpinan</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>463.803.000</td>
                  <td>52.71</td>
                  <td>3.000</td>
                </tr>
                <tr>
                  <td>0120</td>
                  <td>Pelayanan komunikasi publik</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>2.768</td>
                  <td>8.463.803.000</td>
                  <td>67.71</td>
                  <td>3.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah belanja program 01</td>
                  <td>163.803.000</td>
                  <td>163.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Program peningkatan sarana dan prasarana aparatur kementerian pertahanan</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>6.803.000</td>
                  <td>3.768</td>
                  <td>8.463.803.000</td>
                  <td>78.71</td>
                  <td>33.000</td>
                </tr>
                <tr>
                  <td>0211</td>
                  <td>Pengelolaan barang milik negara</td>
                  <td>7.803.000</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>3.768</td>
                  <td>6.463.803.000</td>
                  <td>77.71</td>
                  <td>33.000</td>
                </tr>
                <tr>
                  <td>0212</td>
                  <td>Kelaikan sarana pertahanan</td>
                  <td>3.803.000</td>
                  <td>4.803.000</td>
                  <td>4.803.000</td>
                  <td>3.768</td>
                  <td>6.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0213</td>
                  <td>Kondisi material pertahanan</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0214</td>
                  <td>Pengadaan jasa komunikasi pertahanan</td>
                  <td>5.803.000</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0215</td>
                  <td>Pengambangan sarana dan prasarana pertahanan diwilayah perbatasan</td>
                  <td>5.803.000</td>
                  <td>4.803.000</td>
                  <td>45.803.000</td>
                  <td>46.768</td>
                  <td>7.463.803.000</td>
                  <td>44.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0216</td>
                  <td>Pengadaan barang dan jasa militer</td>
                  <td>4.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>0217</td>
                  <td>Dukungan manajemen dan pelaksanaan tugas teknis lainnya badan ranahan</td>
                  <td>4.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>44.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>0218</td>
                  <td>Program pengawasan dan peningkatan akuntabilitas aparatur kementerian pertahanan</td>
                  <td>2.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>2.118.463.803.000</td>
                  <td>92.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0219</td>
                  <td>Dukungan manajemen dan pelaksanaan tugas teknis lainnya</td>
                  <td>12.119.863.803.000</td>
                  <td>2.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>66.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>0220</td>
                  <td>Pengawasan umum kemhan/tni</td>
                  <td>2.863.803.000</td>
                  <td>3.463.803.000</td>
                  <td>18.863.803.000</td>
                  <td>3.768</td>
                  <td>8.463.803.000</td>
                  <td>5.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0221</td>
                  <td>Pengawasan pengadaan kemhan/tni</td>
                  <td>2.863.803.000</td>
                  <td>19.463.803.000</td>
                  <td>3.863.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>2.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0222</td>
                  <td>Pengawasan logistik kemhan/tni</td>
                  <td>2.863.803.000</td>
                  <td>4.463.803.000</td>
                  <td>18.863.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>82.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah belanja program 02</td>
                  <td>19.863.803.000</td>
                  <td>19.463.803.000</td>
                  <td>18.863.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>82.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Program penelitian dan pengembangan kemeterian pertahanan</td>
                  <td>3.863.803.000</td>
                  <td>19.463.803.000</td>
                  <td>3.863.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>82.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0411</td>
                  <td>Penelitian dan pengembangan strategi pertahanan</td>
                  <td>3.863.803.000</td>
                  <td>3.463.803.000</td>
                  <td>32.863.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>82.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0412</td>
                  <td>Penelitian dan pengembangan alat peralatan pertahanan</td>
                  <td>2.863.803.000</td>
                  <td>3.463.803.000</td>
                  <td>6.863.803.000</td>
                  <td>2.768</td>
                  <td>2.463.803.000</td>
                  <td>6.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0413</td>
                  <td>Penelitian dan pengembangan iptek pertahanan</td>
                  <td>19.863.803.000</td>
                  <td>3.463.803.000</td>
                  <td>4.863.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>82.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0414</td>
                  <td>Penelitian dan pengembangan sumber daya pertahanan</td>
                 <td>19.863.803.000</td>
                  <td>19.463.803.000</td>
                  <td>18.863.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>82.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>0415</td>
                  <td>Dukungab manajemen dan pelaksanaan tugas teknis lainnya balitbang</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah belanja program 04</td>
                  <td>6.803.000</td>
                  <td>5.803.000</td>
                  <td>7.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>98.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Program pendidikan dan pelatihan kemhan/tni</td>
                  <td>11.803.000</td>
                  <td>2.803.000</td>
                  <td>1.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0511</td>
                  <td>Pendidikan dan pelatihan bahasa</td>
                  <td>2.803.000</td>
                  <td>5.803.000</td>
                  <td>8.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0512</td>
                  <td>Pendidikan dan pelatihan manajemen pertahanan</td>
                  <td>5.803.000</td>
                  <td>3.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0513</td>
                  <td>Pendidikan dan pelatihan teknis fungsional pertahanan</td>
                  <td>7.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0514</td>
                  <td>Dukngan manajemen dan pelaksanaan tugas teknis lainnya badiklat</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>88.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0515</td>
                  <td>Pusat pendidikan dan pelatihan bela negara</td>
                  <td>5.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0516</td>
                  <td>Program strategi pertahanan</td>
                  <td>7.803.000</td>
                  <td>163.803.000</td>
                  <td>5.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0517</td>
                  <td>Analisa strategis</td>
                  <td>4.803.000</td>
                  <td>163.803.000</td>
                  <td>4.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0518</td>
                  <td>Perumusan kebijakan strategis dan kebijakan implementatif</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0519</td>
                  <td>Kerja sama internasional</td>
                  <td>3.803.000</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0520</td>
                  <td>Pengumuman kebijakan pebgerahan komponen pertahanan negara</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0521</td>
                  <td>Pengumuman hukum strategi pertahanan</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>4.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>4.000</td>
                </tr>
                <tr>
                  <td>0522</td>
                  <td>Pengelolaan wilayah pertahanan</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0523</td>
                  <td>Dukungan manajemen dan pelaksanaan tugas taktus lainnya</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>5.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0524</td>
                  <td>Jumlah belanja program 06</td>
                  <td>6.803.000</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>6.768</td>
                  <td>4.463.803.000</td>
                  <td>78.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0525</td>
                  <td>Program perencanaan umum dan pengangaran pertahanan</td>
                  <td>8.803.000</td>
                  <td>3.803.000</td>
                  <td>2.803.000</td>
                  <td>43.768</td>
                  <td>4.463.803.000</td>
                  <td>79.71</td>
                  <td>67.000</td>
                </tr>
                <tr>
                  <td>0526</td>
                  <td>Administrasi dan pelaksanaan anggaran</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>4.803.000</td>
                  <td>5.768</td>
                  <td>5.463.803.000</td>
                  <td>78.71</td>
                  <td>64.000</td>
                </tr>
                <tr>
                  <td>0527</td>
                  <td>Pengendalian dan program anggaran</td>
                  <td>5.803.000</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>4.768</td>
                  <td>4.463.803.000</td>
                  <td>67.71</td>
                  <td>5.000</td>
                </tr>
                <tr>
                  <td>0528</td>
                  <td>Perencanaan pembangunan pertahanan</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>22.803.000</td>
                  <td>3.768</td>
                  <td>4.463.803.000</td>
                  <td>66.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0529</td>
                  <td>Dukungan manajemen dan pelaksanaan tugas teknis lainnya</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>2.803.000</td>
                  <td>3.768</td>
                  <td>8.463.803.000</td>
                  <td>77.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah belanja program 07</td>
                  <td>163.803.000</td>
                  <td>163.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>Program pengembangan teknologi dan industri pertahanan</td>
                  <td>163.803.000</td>
                  <td>163.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0611</td>
                  <td>Produksi alutsista industri dalam negeri dan pengembangan pinak industri pertahanan
                  </td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                <tr>
                  <td>0612</td>
                  <td>Jumlah belanja program 08</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                  <td>0613</td>
                  <td>Program potensi pertahanan</td>
                  <td>6.803.000</td>
                  <td>163.803.000</td>
                  <td>5.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                  <td>0614</td>
                  <td>Pembinaan keveteranan</td>
                  <td>3.803.000</td>
                  <td>9.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                  <td>0615</td>
                  <td>Pembinaan kesadaran bela negara</td>
                  <td>2.803.000</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                  <td>0616</td>
                  <td>Pembentukan dan pembinaan komponen pendukung</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                  <td>0617</td>
                  <td>Pembinaan potensi teknologi dan industri pertahanan</td>
                  <td>163.803.000</td>
                  <td>5.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                  <td>0618</td>
                  <td>Dukungan manajemen dan pelaksanaan tugas teknis lainnya</td>
                  <td>4.803.000</td>
                  <td>33.803.000</td>
                  <td>22.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                  <td></td>
                  <td>Jumlah belanja program 09</td>
                  <td>55.803.000</td>
                  <td>2.803.000</td>
                  <td>22.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>07</td>
                  <td>Program kekuatan pertahanan</td>
                  <td>88.803.000</td>
                  <td>163.803.000</td>
                  <td>6.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0721</td>
                  <td>Pembinaan fasilitas dan jasa pertahanan</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>5.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0722</td>
                  <td>Pembinaan kesehatan pertahanan</td>
                  <td>2.803.000</td>
                  <td>5.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0723</td>
                  <td>Pembinaan material pertahanan</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>6.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0724</td>
                  <td>Pembinaan sumber daya manusia</td>
                  <td>6.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>5.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0725</td>
                  <td>Dukungan manajemen dan pelaksanaan tugas teknis lainnya</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0726</td>
                  <td>Program pembinaan instalasi strategid nasional</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>5.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0727</td>
                  <td>Pembinaan pengamanan dan pemeliharan</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>88.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0728</td>
                  <td>Pembinaan pengembangan dan kerjasama</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0729</td>
                  <td>Dukungan manajemen dan pelaksanaan tugas teknis</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td></td>
                  <td>Jumlah belanja program 27</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>08</td>
                  <td>Program pendidikan dan pelatihan kemhan/tni</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>33.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0811</td>
                  <td>Penyelenggaraan pendidikan tinggi pertahanan</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0812</td>
                  <td>Jumlah belanja program 06</td>
                  <td>7.803.000</td>
                  <td>5.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0813</td>
                  <td>Jumlah belanja rupiah murni</td>
                  <td>3.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>3.463.803.000</td>
                  <td>77.71</td>
                  <td>403.000</td>
                </tr>

                </tr>
                  <td>0814</td>
                  <td>Pinjaman luar negeri</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>44.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0815</td>
                  <td>Program peningkatan sarana dan prasarana apararus kementerian pertahanan</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>33.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0816</td>
                  <td>Pengadaan barang dan jasa militer</td>
                  <td>163.803.000</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0817</td>
                  <td>Jumlah belanja program 02</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td></td>
                  <td>Jumlah belanja pinjaman luar negeri</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>09</td>
                  <td>Rupiah murni pendamping</td>
                  <td>2.803.000</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0911</td>
                  <td>Program peningkatan sarana dan prasarana</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>0912</td>
                  <td>Pengadaan barang dan jasa militer</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>5.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td></td>
                  <td>Jumlah belanja program 02</td>
                  <td>16.223.803.000</td>
                  <td>4.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td></td>
                  <td>Jumlah belanja rupiah murni pendamping</td>
                  <td>163.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>

                </tr>
                  <td>010</td>
                  <td>PNBP</td>
                  <td>5.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>2.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01011</td>
                  <td>Program dukungan manajemen dan pelaksanaan tugas teknis lainnya</td>
                  <td>163.803.000</td>
                  <td>5.997.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01012</td>
                  <td>Pelayanan rehabilitas dan perumahan</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01013</td>
                  <td>Dukungan pelayanan umum</td>
                  <td>2.803.000</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01014</td>
                  <td>Jumlah belanja program 01</td>
                  <td>163.803.000</td>
                  <td>2.803.000</td>
                  <td>6.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01015</td>
                  <td>Jumlah belanja PNBP</td>
                  <td>5.803.000</td>
                  <td>6.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01016</td>
                  <td>Pinjaman dalam negeri</td>
                  <td>2.803.000</td>
                  <td>5.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01017</td>
                  <td>Program pengembangan teknologi dan industri pertahanan</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>5.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td>01018</td>
                  <td>Produksi alutsista industri dalam negeri dan pengembangan pinak industri pertahanan</td>
                  <td>4.803.000</td>
                  <td>3.803.000</td>
                  <td>2.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>89.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td></td>
                  <td>Jumlah belanja program 08</td>
                  <td>2.990.803.000</td>
                  <td>163.803.000</td>
                  <td>4.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td></td>
                  <td>Jumlah belanja pinjaman dalam negeri</td>
                  <td>1.163.803.000</td>
                  <td>1.163.803.000</td>
                  <td>22.88.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>
                </tr>
                  <td></td>
                  <td>Jumlah</td>
                  <td>2.803.000</td>
                  <td>3.803.000</td>
                  <td>163.803.000</td>
                  <td>46.768</td>
                  <td>8.463.803.000</td>
                  <td>52.71</td>
                  <td>403.000</td>
                </tr>

                </tbody>
                <tfoot>
                  <tr>
                  <td>#</td>
                  <td>TOTAL</td>
                  <td>551.392.146.000</td>
                  <td>127.873.791.917</td>
                  <td>423.518.354.083</td>
                  <td>23.19</td>
                  <td></td>
                  <td>0</td>
                  <td>0</td>
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
          "paging": false,
          "searching": false,
          "ordering": false,
          "bLengthChange": false,
          dom: 'lBfrtip',
                buttons: [

                    {   
                        text: 'Excel',
                        extend: 'excelHtml5',
                        footer: true,
                        filename: 'Laporan Realisasi Anggaran Belanja Menurut Sumber Dana {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        customize: function (xlsx) {
                          console.log(xlsx);
                          var sheet = xlsx.xl.worksheets['sheet1.xml'];
                          var downrows = 8;
                          var clRow = $('row', sheet);
                          //style
                          

                          var mergeCells = $('mergeCells', sheet);
 
                          mergeCells[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A1:G1'
                            }
                          } ) );

                          mergeCells.attr( 'count', mergeCells.attr( 'count' )+1 );
 
                          function _createNode( doc, nodeName, opts ) {
                            var tempNode = doc.createElement( nodeName );
           
                            if ( opts ) {
                              if ( opts.attr ) {
                                $(tempNode).attr( opts.attr );
                              }
           
                              if ( opts.children ) {
                                $.each( opts.children, function ( key, value ) {
                                  tempNode.appendChild( value );
                                } );
                              }
           
                              if ( opts.text !== null && opts.text !== undefined ) {
                                tempNode.appendChild( doc.createTextNode( opts.text ) );
                              }
                            }
           
                            return tempNode;
                          }
                          //update Row
                          clRow.each(function () {
                              var attr = $(this).attr('r');
                              var ind = parseInt(attr);
                              ind = ind + downrows;
                              $(this).attr("r",ind);
                          });
                   
                          // Update  row > c
                          $('row c ', sheet).each(function () {
                              var attr = $(this).attr('r');
                              var pre = attr.substring(0, 1);
                              var ind = parseInt(attr.substring(1, attr.length));
                              ind = ind + downrows;
                              $(this).attr("r", pre + ind);
                          });

                          function AddrowHead(index,data) {
                              msg='<row r="'+index+'">'
                              for(i=0;i<data.length;i++){
                                  var key=data[i].k;
                                  var value=data[i].v;
                                  msg += '<c t="inlineStr" r="' + key + index + '" s="51">';
                                  msg += '<is>';
                                  msg +=  '<t>'+value+'</t>';
                                  msg+=  '</is>';
                                  msg+='</c>';
                              }
                              msg += '</row>';
                              return msg;
                          }
                   
                          function Addrow(index,data) {
                              msg='<row r="'+index+'">'
                              for(i=0;i<data.length;i++){
                                  var key=data[i].k;
                                  var value=data[i].v;
                                  msg += '<c t="inlineStr" r="' + key + index + '" s="">';
                                  msg += '<is>';
                                  msg +=  '<t>'+value+'</t>';
                                  msg+=  '</is>';
                                  msg+='</c>';
                              }
                              msg += '</row>';
                              return msg;
                          }
                   
                          //insert
                          var r1 = AddrowHead(1, [{ k: 'A', v: 'Laporan Realisasi Anggaran Belanja Menurut Sumber Dana' }]);
                          var r2 = Addrow(3, [{ k: 'A', v: 'KEMENTERIAN NEGARA/LEMBAGA : 012' }]);
                          var r3 = Addrow(4, [{ k: 'A', v: 'ESELON : 01 - KEMENTERIAN PERTAHANAN' }]);
                          var r4 = Addrow(4, [{ k: 'G', v: 'Kode Lap : LRA.P.E1.2' }]);
                          var r5 = Addrow(5, [{ k: 'G', v: 'Tanggal : 11/02/19 11:30 PM' }]);
                          var r6 = Addrow(6, [{ k: 'G', v: 'Halaman : 2' }]);
                          var r7 = Addrow(7, [{ k: 'G', v: 'Prg ID : lap_09' }]);

                          //
                          var r8 = Addrow(8, [{ k: 'F', v: 'REALISASI BELANJA' }]);
                           
                          sheet.childNodes[0].childNodes[1].innerHTML = r1+ r2+ r3+ r4+ r5+ r6+ r7+ r8+  sheet.childNodes[0].childNodes[1].innerHTML;

                      }
                    },
                    { 
                        text: 'PDF',
                        extend: 'pdfHtml5',
                        footer: true,
                        filename: 'Laporan Realisasi Anggaran Belanja Menurut Sumber Dana {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'Laporan Realisasi Anggaran Belanja Menurut Sumber Dana' + '\n' + '{{Session::get('status_user')}}' + '\n' + ' PERIODE 31 Desember 2019',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        pageMargins: [ 150, 150, 150, 150 ],
                        margin: [ 150, 150, 150, 150 ],
                        messageTop : 'KEMENTERIAN NEGARA/LEMBAGA : 012 - {{Session::get('status_user')}} \n ESELON : 01 - KEMENTERIAN PERTAHANAN \n \n Kode Lap : LRA.P.E1.2 \n Tanggal : 11/02/19 11:30 PM \n Halaman : 2 \n Prg ID : lap_09',

                        /*customize: function (doc) {
                          doc['header']=(function() {
                          return {
                            columns: [
                              {
                                alignment: 'center',
                                fontSize: 12,
                                text: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI'
                              
                              }
                            ],
                            margin: 20
                          }
                        });
                        }*/

                        customize: function ( doc ) {

                          var a = new Date();
                          var year = a.getFullYear();

                          //footer
                           var cols = [];
                           cols[0] = {text: 'Kementerian Pertahanan', alignment: 'left', margin:[20] };
                           cols[1] = {text: year, alignment: 'right', margin:[0,0,20] };
                           var objFooter = {};
                           objFooter['columns'] = cols;
                           doc['footer']=objFooter;

                          //header
                          /*doc['header']=(function() {
                            return {
                              columns: [
                                {
                                  alignment: 'center',
                                  fontSize: 12,
                                  text: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI'
                                
                                }
                              ],
                              margin: 20
                            }
                          });*/
                          
                          //content header
                          /*doc.content.splice(0, 0,
                            {
                                margin: [0, 0, 0, 5],
                                alignment: 'right',
                                text : 'Abcd Right'
                            }
                           );

                           doc.content.splice(0, 0,
                            {
                                margin: [0, 0, 0, 0],
                                alignment: 'left',
                                text : 'Abcd Left'
                            }
                           );*/

                          doc.styles.title = {
                            color: 'black',
                            fontSize: '16',
                            alignment: 'center'
                          }

                        }
                    }

                    ]
        }

      );
  })
</script>
@endsection