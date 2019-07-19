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
            <div class="box-header padding-bottom-10 text-right with-border panel-heading"></div>
            <div class="box-header padding-bottom-10 text-center">
              <h4 class="box-title report-title">Laporan Perkembangan Pembangunan dan Perkembangan Fasilitas</h4><br>
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


                <table id="tablelist" class="table table-bordered table-striped table-hover">
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
                    <th class="text-center" style="border-right: 1px solid #666;">BELANJA NETTO</th>
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
                  <td>6.119.863.803.000</td>
                  <td>7.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>2.118.463.803.000</td>
                  <td>78.71</td>
                  <td>1.403.000</td>
                </tr>
                <tr>
                  <td>511113</td>
                  <td>Belanja pembulatan gaji pns</td>
                  <td>4.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>1.118.463.803.000</td>
                  <td>66.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>511114</td>
                  <td>Belanja tunj. penghidupan luar negeri untuk home</td>
                  <td>3.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>11.146.768</td>
                  <td>22.118.463.803.000</td>
                  <td>88.71</td>
                  <td>11.403.000</td>
                </tr>
                <tr>
                  <td>511116</td>
                  <td>Belanja gaji pokok pns TNI/Polri</td>
                  <td>2.119.863.803.000</td>
                  <td>33.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>1.146.768</td>
                  <td>2.118.463.803.000</td>
                  <td>66.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>511117</td>
                  <td>Belanja pembulatan gaji pns tni/polri</td>
                  <td>1.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>6.118.463.803.000</td>
                  <td>78.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>511118</td>
                  <td>Belanja tunj. suami/istri pns tni/polri</td>
                  <td>5.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>6.118.463.803.000</td>
                  <td>98.71</td>
                  <td>7.403.000</td>
                </tr>
                <tr>
                  <td>511119</td>
                  <td>Belanja tunj. anak pns tni/polri</td>
                  <td>6.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>89.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>511120</td>
                  <td>Belanja tunj. struktural pns tni/polri</td>
                  <td>8.119.863.803.000</td>
                  <td>7.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>146.768</td>
                  <td>90.463.803.000</td>
                  <td>76.71</td>
                  <td>132.403.000</td>
                </tr>
                <tr>
                  <td>511121</td>
                  <td>Belanja tunj. fungsional pns tni/polri</td>
                  <td>8.119.863.803.000</td>
                  <td>7.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>6.118.463.803.000</td>
                  <td>99.71</td>
                  <td>6.403.000</td>
                </tr>
                <tr>
                  <td>511122</td>
                  <td>Belanja tunj. pph pns tni/polri</td>
                  <td>8.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>7.118.463.803.000</td>
                  <td>55.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>511123</td>
                  <td>Belanja tunj. beras pns tni/polri</td>
                  <td>6.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>23.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>78.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>511124</td>
                  <td>Belanja uang makan pns tni/polri</td>
                  <td>6.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>86.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>511125</td>
                  <td>Belanja tunjangan medis pns tni/polri</td>
                  <td>4.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>7.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>67.71</td>
                  <td>3.403.000</td>
                </tr>
                <tr>
                  <td>511126</td>
                  <td>Belanja tunjangan umum pns tni/polri</td>
                  <td>3.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>133.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>5.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>511126</td>
                  <td>Belanja tunjangan kompensasi kerja bidang persandian pns</td>
                  <td>3.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>7.118.463.803.000</td>
                  <td>33.71</td>
                  <td>3.403.000</td>
                </tr>
                <tr>
                  <td>511127</td>
                  <td>Belanja tunjangan profesi dosen/kehormatan guru</td>
                  <td>8.119.863.803.000</td>
                  <td>7.119.463.803.000</td>
                  <td>7.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>33.71</td>
                  <td>3.403.000</td>
                </tr>
                <tr>
                  <td>511128</td>
                  <td>Jumlah sub kelompok belanja 5111</td>
                  <td>45.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>9.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>88.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>5112</td>
                  <td>Belanja gaji dan tunjangan tni/polri</td>
                  <td>5.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>44.71</td>
                  <td>3.403.000</td>
                </tr>
                <tr>
                  <td>511211</td>
                  <td>Belanja gaji pokok tni/polri</td>
                  <td>5.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511212</td>
                  <td>Belanja pembulatan gaji tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511213</td>
                  <td>Belanja tunj. suami/istri pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511214</td>
                  <td>Belanja tunj. anak pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511215</td>
                  <td>Belanja tunj. struktural pns tni/polri</td>
                  <td>14.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>13.146.768</td>
                  <td>12.118.463.803.000</td>
                  <td>22.71</td>
                  <td>12.403.000</td>
                </tr>
                <tr>
                  <td>511216</td>
                  <td>Belanja tunj. fungsional pns tni/polri</td>
                  <td>5.119.863.803.000</td>
                  <td>14.119.463.803.000</td>
                  <td>14.118.863803.000</td>
                  <td>5.146.768</td>
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
                  <td>5.146.768</td>
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
                  <td>4.146.768</td>
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
                  <td>4.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112121</td>
                  <td>Belanja tunj. umum tni/polri</td>
                  <td>4.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112122</td>
                  <td>Belanja santunan cacat TNI</td>
                  <td>16.119.863.803.000</td>
                  <td>146.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112123</td>
                  <td>Belanja tunj. profesi dosen/kehormatan guru</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>136.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112124</td>
                  <td>Jumlah sub kelompok belanja 5112</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112125</td>
                  <td>Belanja lembur</td>
                  <td>16.119.863.803.000</td>
                  <td>136.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112126</td>
                  <td>Belanja uang lembur</td>
                  <td>6.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>6.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112127</td>
                  <td>Jumlah sub kelompok belanja 5113</td>
                  <td>16.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112128</td>
                  <td>Belanja tunj. khusus dan belanja pegawai</td>
                  <td>6.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112129</td>
                  <td>Belanja pegawai (tunjangan khusus/kegiatan)</td>
                  <td>16.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112130</td>
                  <td>Jumlah sub kelompok belanja 5123</td>
                  <td>6.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5112132</td>
                  <td>Jumlah kelompok belanja</td>
                  <td>16.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>8.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>88.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>52</td>
                  <td>Belanja barang</td>
                  <td>16.119.863.803.000</td>
                  <td>8.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521111</td>
                  <td>Belanja barang operasional</td>
                  <td>16.119.863.803.000</td>
                  <td>7.119.463.803.000</td>
                  <td>8.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>5.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521112</td>
                  <td>Belanja pertemuan perkantoran</td>
                  <td>16.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>136.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521113</td>
                  <td>Belanja pengadaan bahan makanan</td>
                  <td>4.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521114</td>
                  <td>JBelanja penambah daya tahan tubuh</td>
                  <td>16.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>4.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521115</td>
                  <td>Belanja pengiriman surat dinas</td>
                  <td>4.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>8.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521116</td>
                  <td>Belanja humas</td>
                  <td>6.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>e.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>82.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521117</td>
                  <td>Belanja bidang operasinal lainnya</td>
                  <td>6.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 52</td>
                  <td>5.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>9.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5212</td>
                  <td>Belanja barang dan operasional</td>
                  <td>4.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521211</td>
                  <td>Belanja bahan</td>
                  <td>8.119.863.803.000</td>
                  <td>8.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>8.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521212</td>
                  <td>Belanja output kegiatan</td>
                  <td>7.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>7.403.000</td>
                </tr>
                <tr>
                  <td>521213</td>
                  <td>Belanja barang dan operasional</td>
                  <td>6.119.863.803.000</td>
                  <td>8.119.463.803.000</td>
                  <td>8.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 5212</td>
                  <td>6.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5213</td>
                  <td>Belanja barang persediaan</td>
                  <td>166.119.863.803.000</td>
                  <td>166.119.463.803.000</td>
                  <td>45.118.863803.000</td>
                  <td>164.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521311</td>
                  <td>Belanja barang persediaan barang komsumsi</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521312</td>
                  <td>Belanja barang persediaan amunisi</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>3.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521313</td>
                  <td>Belanja jasa</td>
                  <td>3.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>92.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521314</td>
                  <td>Belanja langganan listrik</td>
                  <td>16.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>99.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521315</td>
                  <td>Belanja langganan telepon</td>
                  <td>2.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>22.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>521316</td>
                  <td>Belanja langganan air</td>
                  <td>7.119.863.803.000</td>
                  <td>7.119.463.803.000</td>
                  <td>7.118.863803.000</td>
                  <td>6.146.768</td>
                  <td>6.118.463.803.000</td>
                  <td>55.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521317</td>
                  <td>Belanja langganan daya dan jasa lainnya</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>33.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521317</td>
                  <td>Belanja jasa konsultan</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521318</td>
                  <td>Belanja sewa</td>
                  <td>3.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521319</td>
                  <td>Belanja jasa profesi</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521320</td>
                  <td>Belanja jasa lainnya</td>
                  <td>4.119.863.803.000</td>
                  <td>2.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>Q100</td>
                  <td>Jumlah sub kelompok belanja 5221</td>
                  <td>16.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>77.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5231</td>
                  <td>Belanja pemeliharaan</td>
                  <td>16.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>8.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>523111</td>
                  <td>Belanja pemeliharaan gedung dan bangunan</td>
                  <td>5.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>5.118.463.803.000</td>
                  <td>59.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>523112</td>
                  <td>Belanja pemeliharaan gedung dan bangunan lainnya</td>
                  <td>3.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>523113</td>
                  <td>Belanja pemeliharaan peralatan dan mesin</td>
                  <td>3.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>523114</td>
                  <td>Belanja bahan bakar minyak dan pelumas (BMP)</td>
                  <td>5.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>523114</td>
                  <td>Belanja pemeliharaan peralatan dan mesin lainnya</td>
                  <td>16.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>33.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>523115</td>
                  <td>Belanja pemelihataan jalan dan jembatan</td>
                  <td>4.119.863.803.000</td>
                  <td>8.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>523116</td>
                  <td>Belanja pemeliharaan lainnya</td>
                  <td>4.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 5231</td>
                  <td>16.119.863.803.000</td>
                  <td>2.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>5214</td>
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
                  <td>521411</td>
                  <td>Belanja perjalanan biasa</td>
                  <td>6.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>44.71</td>
                  <td>153.403.000</td>
                </tr>
                <tr>
                  <td>521412</td>
                  <td>Belanja perjalanan dinas dalam kota</td>
                  <td>4.119.863.803.000</td>
                  <td>7.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>77.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>521413</td>
                  <td>Belanja perjalanan dinas paket meeting dalam kota</td>
                  <td>3.119.863.803.000</td>
                  <td>2.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>33.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>521414</td>
                  <td>Belanja perjalanan dinas paket meeting luar kota</td>
                  <td>8.119.863.803.000</td>
                  <td>2.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521415</td>
                  <td>Jumlah sub kelompok belanja 5241</td>
                  <td>16.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>2.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521416</td>
                  <td>Belanja perjalanan luar negeri</td>
                  <td>4.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>22.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>521417</td>
                  <td>Belanja perjalanan biasa luar negeri</td>
                  <td>7.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>55.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>521418</td>
                  <td>Belanja perjalanan lainnya luar negeri</td>
                  <td>1.119.863.803.000</td>
                  <td>16.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>7.118.463.803.000</td>
                  <td>88.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 5242</td>
                  <td>16.119.863.803.000</td>
                  <td>1.119.463.803.000</td>
                  <td>16.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>66.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>5215</td>
                  <td>Belanja barang untuk diserahkan kepada masyarakat</td>
                  <td>4.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>6.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>4.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>521511</td>
                  <td>Belanja peralatan dan mesin untuk diserahkan kepada masyarakat</td>
                  <td>3.119.863.803.000</td>
                  <td>6.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>5.146.768</td>
                  <td>14.118.463.803.000</td>
                  <td>88.71</td>
                  <td>e.403.000</td>
                </tr>
                <tr>
                  <td>521512</td>
                  <td>Belanja barang fisik lainnya untuk diserahkan kepada masyarakat</td>
                  <td>9.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>55.71</td>
                  <td>6.403.000</td>
                </tr>
                <tr>
                  <td>521513</td>
                  <td>Jumlah sub kelompok belanja 5263</td>
                  <td>7.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>5.71</td>
                  <td>6.403.000</td>
                </tr>
                <tr>
                  <td>521514</td>
                  <td>Jumlah kelompok belanja 52</td>
                  <td>3.119.863.803.000</td>
                  <td>8.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>14.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>44.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>521515</td>
                  <td>Belanja modal</td>
                  <td>4.119.863.803.000</td>
                  <td>136.119.463.803.000</td>
                  <td>126.118.863803.000</td>
                  <td>134.146.768</td>
                  <td>44.118.463.803.000</td>
                  <td>77.71</td>
                  <td>3.403.000</td>
                </tr>
                <tr>
                  <td>521516</td>
                  <td>Belanja modal peralatan dan mesin</td>
                  <td>2.119.863.803.000</td>
                  <td>34.119.463.803.000</td>
                  <td>42.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>44.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td>521517</td>
                  <td>Belanja penambahan nilai peralatan dan mesin</td>
                  <td>3.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>5.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>4.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlag sub kelompok belanja 5321</td>
                  <td>6.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>43.71</td>
                  <td>5.403.000</td>
                </tr>
                <tr>
                  <td>5216</td>
                  <td>Belanja modal gedung dan bangunan</td>
                  <td>8.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>5.118.463.803.000</td>
                  <td>98.71</td>
                  <td>6.403.000</td>
                </tr>
                <tr>
                  <td>521611</td>
                  <td>Belanja modal upah tenaga kerja dan honor pengelola</td>
                  <td>8.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>90.71</td>
                  <td>6.403.000</td>
                </tr>
                <tr>
                  <td>521612</td>
                  <td>Belanja modal perencanaan dan pengawasan gedung</td>
                  <td>5.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>88.71</td>
                  <td>6.403.000</td>
                </tr>
                <tr>
                  <td>521613</td>
                  <td>Belanja penambahan nilai gedung dan bangunan</td>
                  <td>9.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>88.71</td>
                  <td>3.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 5321</td>
                  <td>7.119.863.803.000</td>
                  <td>4.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>2.118.463.803.000</td>
                  <td>35.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>5217</td>
                  <td>Belanja modal jalan, irigasi dan jaringan</td>
                  <td>7.119.863.803.000</td>
                  <td>2.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>77.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521711</td>
                  <td>Belanja modal jalan dan jembatan</td>
                  <td>2.119.863.803.000</td>
                  <td>44.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>32.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>521712</td>
                  <td>Belanja modal sewa peralatan jaringan</td>
                  <td>6.119.863.803.000</td>
                  <td>5.119.463.803.000</td>
                  <td>4.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>2.118.463.803.000</td>
                  <td>84.71</td>
                  <td>2.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 5341</td>
                  <td>2.119.863.803.000</td>
                  <td>21.119.463.803.000</td>
                  <td>32.118.863803.000</td>
                  <td>4.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>74.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 5341</td>
                  <td>4.119.863.803.000</td>
                  <td>3.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>45.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td>5218</td>
                  <td>Belanja modal lainnya</td>
                  <td>23.119.863.803.000</td>
                  <td>11.119.463.803.000</td>
                  <td>3.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>4.118.463.803.000</td>
                  <td>79.71</td>
                  <td>13.403.000</td>
                </tr>
                <tr>
                  <td>521811</td>
                  <td>Belanja modal lainnya</td>
                  <td>4.119.863.803.000</td>
                  <td>2.119.463.803.000</td>
                  <td>66.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>2.118.463.803.000</td>
                  <td>77.71</td>
                  <td>4.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah sub kelompok belanja 5361</td>
                  <td>22.119.863.803.000</td>
                  <td>11.119.463.803.000</td>
                  <td>2.118.863803.000</td>
                  <td>3.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>56.71</td>
                  <td>3.403.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah kelompok belanja 53</td>
                  <td>11.119.863.803.000</td>
                  <td>22.119.463.803.000</td>
                  <td>11.118.863803.000</td>
                  <td>2.146.768</td>
                  <td>3.118.463.803.000</td>
                  <td>22.71</td>
                  <td>13.403.000</td>
                </tr>
                
                </tbody>
                <tfoot>
                  <tr>
                      <td></td>
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
    
    var APP_URL = {!! json_encode(url('/')) !!};
    var file_name = 'LAPORAN PERKEMBANGAN PEMBANGUNAN DAN PERKEMBANGAN FASILITAS';
    var status_user = '{{Session::get('status_user')}}';
    var periode = 'UNTUK PERIODE YANG BERAKHIR 31 DESEMBER 2019';

    $('#tablelist').DataTable(

        { 
          "paging": false,
          "searching": false,
          "ordering": false,
          "bLengthChange": false,
          dom: 'lBfrtip',
                buttons: [
                    {
                      text: '<i class="fa fa-filter"></i> Buat Laporan Baru',
                      className: 'btn btn-success',
                      action: function ( e, dt, node, config ) {
                          window.location = APP_URL + '/cms/kemhan/uo/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas';
                      }
                    },
                    {   
                        text: '<i class="fa fa-file-excel-o"></i> Excel',
                        extend: 'excelHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: file_name+'-'+status_user+'-'+periode,
                        title:'',
                        orientation: 'landscape',
                        pageSize: 'Legal',
                        customize: function (xlsx) {
                          console.log(xlsx);
                          var sheet = xlsx.xl.worksheets['sheet1.xml'];
                          var downrows = 10;
                          var clRow = $('row', sheet);
                          //style
                          
                          //1
                          var mergeCells1 = $('mergeCells', sheet);
                          mergeCells1[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A1:I1'
                            }
                          } ) );
                          mergeCells1.attr( 'count', mergeCells1.attr( 'count' )+1 );

                          //2
                          var mergeCells2 = $('mergeCells', sheet);
                          mergeCells2[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A2:I2'
                            }
                          } ) );
                          mergeCells2.attr( 'count', mergeCells2.attr( 'count' )+1 );

                          //3
                          var mergeCells3 = $('mergeCells', sheet);
                          mergeCells3[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A3:I3'
                            }
                          } ) );
                          mergeCells3.attr( 'count', mergeCells3.attr( 'count' )+1 );
 
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
                              $(this).attr('s', '25');
                          });

                          $('row:first c', sheet).attr('s','27');

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
                          var r1 = AddrowHead(1, [{ k: 'A', v: file_name }]);
                          var r2 = AddrowHead(2, [{ k: 'A', v: status_user }]);
                          var r3 = AddrowHead(3, [{ k: 'A', v: periode }]);
                          
                          var r51 = Addrow(5, [{ k: 'A', v: 'KEMENTERIAN NEGARA/LEMBAGA : 012' }]);
                          var r52 = Addrow(5, [{ k: 'G', v: 'Kode Lap : LRA.P.E1.2' }]);

                          var r61 = Addrow(6, [{ k: 'A', v: 'ESELON : 01 - KEMENTERIAN PERTAHANAN' }]);
                          var r62 = Addrow(6, [{ k: 'G', v: 'Tanggal : 11/02/19 11:30 PM' }]);

                          
                          var r7 = Addrow(7, [{ k: 'G', v: 'Halaman : 2' }]);
                          var r8 = Addrow(8, [{ k: 'G', v: 'Prg ID : lap_09' }]);

                          //
                          //var r8 = Addrow(8, [{ k: 'F', v: 'REALISASI BELANJA' }]);
                           
                          sheet.childNodes[0].childNodes[1].innerHTML = r1+r2+r3+r51+r52+r61+r62+r7+r8+ sheet.childNodes[0].childNodes[1].innerHTML;

                      }
                    },
                    { 
                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                        extend: 'pdfHtml5',
                        className: 'btn btn-success',
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

      $("#tablelist_wrapper > .dt-buttons").appendTo("div.panel-heading");
  })
</script>
@endsection