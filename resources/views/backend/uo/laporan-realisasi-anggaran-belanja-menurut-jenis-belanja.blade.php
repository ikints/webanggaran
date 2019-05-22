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
              <h4 class="box-title report-title">Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja</h4><br>
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
                  <td>51</td>
                  <td>Belanja pegawai</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511112</td>
                  <td>Belanja gaji dan tunjangan pns</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511113</td>
                  <td>Belanja pembulatan gaji pns</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511114</td>
                  <td>Belanja tunj. penghidupan luar negeri untuk home</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511116</td>
                  <td>Belanja gaji pokok pns TNI/Polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511117</td>
                  <td>Belanja pembulatan gaji pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511118</td>
                  <td>Belanja tunj. suami/istri pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511119</td>
                  <td>Belanja tunj. anak pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511120</td>
                  <td>Belanja tunj. struktural pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511121</td>
                  <td>Belanja tunj. fungsional pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511122</td>
                  <td>Belanja tunj. pph pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511123</td>
                  <td>Belanja tunj. beras pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511124</td>
                  <td>Belanja uang makan pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511125</td>
                  <td>Belanja tunjangan medis pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511126</td>
                  <td>Belanja tunjangan umum pns tni/polri</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511126</td>
                  <td>Belanja tunjangan kompensasi kerja bidang persandian pns</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511127</td>
                  <td>Belanja tunjangan profesi dosen/kehormatan guru</td>
                  <td>12.119.863.803.000</td>
                  <td>12.119.463.803.000</td>
                  <td>12.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>92.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511128</td>
                  <td>Jumlah sub kelompok belanja 5111</td>
                  <td>112.119.863.803.000</td>
                  <td>112.119.463.803.000</td>
                  <td>112.118.863803.000</td>
                  <td>113.146.768</td>
                  <td>112.118.463.803.000</td>
                  <td>22.71</td>
                  <td>112.403.000</td>
                </tr>
                <tr>
                  <td>5112</td>
                  <td>Belanja gaji dan tunjangan tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511211</td>
                  <td>Belanja gaji pokok tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511212</td>
                  <td>Belanja pembulatan gaji tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511213</td>
                  <td>Belanja tunj. suami/istri pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511214</td>
                  <td>Belanja tunj. anak pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511215</td>
                  <td>Belanja tunj. struktural pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511216</td>
                  <td>Belanja tunj. fungsional pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511217</td>
                  <td>Belanja tunj. pph pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511218</td>
                  <td>Belanja tunj. beras pns tni/polri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>511219</td>
                  <td>Belanja tunj. lauk pauk tni/polri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112120</td>
                  <td>Belanja tunj. kowan/polwan tni/polri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112121</td>
                  <td>Belanja tunj. umum tni/polri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112122</td>
                  <td>Belanja santunan cacat TNI</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112123</td>
                  <td>Belanja tunj. profesi dosen/kehormatan guru</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112124</td>
                  <td>Jumlah sub kelompok belanja 5112</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112125</td>
                  <td>Belanja lembur</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112126</td>
                  <td>Belanja uang lembur</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112127</td>
                  <td>Jumlah sub kelompok belanja 5113</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112128</td>
                  <td>Belanja tunj. khusus dan belanja pegawai</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112129</td>
                  <td>Belanja pegawai (tunjangan khusus/kegiatan)</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112130</td>
                  <td>Jumlah sub kelompok belanja 5123</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112132</td>
                  <td>Jumlah kelompok belanja</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang operasional</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pertemuan perkantoran</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pengadaan bahan makanan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>JBelanja penambah daya tahan tubuh</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pengiriman surat dinas</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja humas</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja bidang operasinal lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 52</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang dan operasional</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja bahan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja output kegiatan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang dan operasional</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5212</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang persediaan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang persediaan barang komsumsi</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang persediaan amunisi</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja jasa</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja langganan listrik</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja langganan telepon</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja langganan air</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja langganan daya dan jasa lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja jasa konsultan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja sewa</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja jasa profesi</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja jasa lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5221</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pemeliharaan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pemeliharaan gedung dan bangunan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pemeliharaan gedung dan bangunan lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pemeliharaan peralatan dan mesin</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja bahan bakar minyak dan pelumas (BMP)</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pemeliharaan peralatan dan mesin lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pemelihataan jalan dan jembatan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja pemeliharaan lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5231</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan dalam negeri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan biasa</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan dinas dalam kota</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan dinas paket meeting dalam kota</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan dinas paket meeting luar kota</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5241</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan luar negeri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan biasa luar negeri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja perjalanan lainnya luar negeri</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5242</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang untuk diserahkan kepada masyarakat</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja peralatan dan mesin untuk diserahkan kepada masyarakat</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja barang fisik lainnya untuk diserahkan kepada masyarakat</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5263</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah kelompok belanja 52</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal peralatan dan mesin</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja penambahan nilai peralatan dan mesin</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlag sub kelompok belanja 5321</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal gedung dan bangunan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal upah tenaga kerja dan honor pengelola</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal perencanaan dan pengawasan gedung</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja penambahan nilai gedung dan bangunan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5321</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal jalan, irigasi dan jaringan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal jalan dan jembatan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal sewa peralatan jaringan</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5341</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5341</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Belanja modal lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5361</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah kelompok belanja 53</td>
                  <td>16.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                
                </tbody>
                <tfoot>
                  <tr>
                      <td>Q100</td>
                      <td>Jumlah belanja</td>
                      <td>116.119.863.803.000</td>
                      <td>116.119.463.803.000</td>
                      <td>216.118.863803.000</td>
                      <td>114.146.768</td>
                      <td>18.463.803.000</td>
                      <td>2.71</td>
                      <td>14.403.000</td>
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
                        filename: 'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja {{Session::get('status_user')}} PERIODE 31 Desember 2019',
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
                          var r1 = AddrowHead(1, [{ k: 'A', v: 'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja' }]);
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
                        filename: 'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja' + '\n' + '{{Session::get('status_user')}}' + '\n' + ' PERIODE 31 Desember 2019',
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