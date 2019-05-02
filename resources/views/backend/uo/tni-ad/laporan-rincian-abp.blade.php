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
                    <td>511161</td>
                    <td>Beban Gaji Pokok PNS TNI/Polri</td>
                    <td>1558701720000</td>
                    <td>329631183331</td>
                    <td>1229070536669</td>
                    <td>21.15</td>
                  </tr>
                  <tr>
                    <td>511169</td>
                    <td>Beban Pembulatan Gaji PNS TNI/Polri</td>
                    <td>60010000</td>
                    <td>4126419</td>
                    <td>55883581</td>
                    <td>6.88</td>
                  </tr>
                  <tr>
                    <td>511171</td>
                    <td>Beban Tunj. Suami/Istri PNS TNI/Polri</td>
                    <td>105794403000</td>
                    <td>22191274246</td>
                    <td>83603128754</td>
                    <td>20.98</td>
                  </tr>
                  <tr>
                    <td>511172</td>
                    <td>Beban Tunj. Anak PNS TNI/Polri</td>
                    <td>32563550000</td>
                    <td>6551718113</td>
                    <td>26011831887</td>
                    <td>20.12</td>
                  </tr>
                  <tr>
                    <td>511173</td>
                    <td>Beban Tunj. Struktural PNS TNI/Polri</td>
                    <td>18118095000</td>
                    <td>3736230000</td>
                    <td>14381865000</td>
                    <td>20.62</td>
                  </tr>
                  <tr>
                    <td>511174</td>
                    <td>Beban Tunj. Fungsional PNS TNI/Polri</td>
                    <td>4344317000</td>
                    <td>929775000</td>
                    <td>3414542000</td>
                    <td>21.40</td>
                  </tr>
                  <tr>
                    <td>511175</td>
                    <td>Beban Tunj. PPh PNS TNI/Polri</td>
                    <td>697692000</td>
                    <td>83115672</td>
                    <td>614576328</td>
                    <td>11.91</td>
                  </tr>
                  <tr>
                    <td>511176</td>
                    <td>Beban Tunj. Beras PNS TNI/Polri</td>
                    <td>88189593000</td>
                    <td>20225580524</td>
                    <td>67964012476</td>
                    <td>22.93</td>
                  </tr>
                  <tr>
                    <td>511179</td>
                    <td>Beban Uang Makan PNS TNI/Polri</td>
                    <td>304951906000</td>
                    <td>57203496718</td>
                    <td>247748409282</td>
                    <td>18.76</td>
                  </tr>
                  <tr>
                    <td>511185</td>
                    <td>Beban Tunj. Daerah Terpencil/Sangat Terpencil PNS TNI/Polri</td>
                    <td>416810000</td>
                    <td>99075000</td>
                    <td>317735000</td>
                    <td>23.77</td>
                  </tr>
                  <tr>
                    <td>511189</td>
                    <td>Beban Tunjangan Khusus Papua PNS TNI/Polri</td>
                    <td>5463478000</td>
                    <td>1326750000</td>
                    <td>4136728000</td>
                    <td>24.28</td>
                  </tr>
                  <tr>
                    <td>511191</td>
                    <td>Beban Tunjangan Medis PNS TNI/POLRI</td>
                    <td>9829546000</td>
                    <td>2014255000</td>
                    <td>7815291000</td>
                    <td>20.49</td>
                  </tr>
                  <tr>
                    <td>511193</td>
                    <td>Beban Tunjangan Umum PNS TNI/Polri</td>
                    <td>76169179000</td>
                    <td>15861892500</td>
                    <td>60307286500</td>
                    <td>20.82</td>
                  </tr>
                  <tr>
                    <td>511194</td>
                    <td>Beban Tunj. Kompensasi Kerja Bidang Persandian PNS TNI/Polri</td>
                    <td>183825000</td>
                    <td>27900000</td>
                    <td>155925000</td>
                    <td>15.18</td>
                  </tr>
                  <tr>
                    <td>511195</td>
                    <td>Beban Tunjangan Operasi Pengamanan pada pulau terluar dan wilayah perbatasan PNS TNI</td>
                    <td>412082000</td>
                    <td>6725925</td>
                    <td>405356075</td>
                    <td>1.63</td>
                  </tr>
                  <tr>
                    <td>511211</td>
                    <td>Beban Gaji Pokok TNI/POLRI</td>
                    <td>10010965979000</td>
                    <td>2317083925591</td>
                    <td>7693882053409</td>
                    <td>23.15</td>
                  </tr>
                  <tr>
                    <td>511219</td>
                    <td>Beban Pembulatan Gaji TNI/POLRI</td>
                    <td>216569000</td>
                    <td>45737639</td>
                    <td>170831361</td>
                    <td>21.12</td>
                  </tr>
                  <tr>
                    <td>511221</td>
                    <td>Beban Tunj. Suami/Istri TNI/POLRI</td>
                    <td>834733169000</td>
                    <td>178816060330</td>
                    <td>655917108670</td>
                    <td>21.42</td>
                  </tr>
                  <tr>
                    <td>511222</td>
                    <td>Beban Tunj. Anak TNI/POLRI</td>
                    <td>257635147000</td>
                    <td>55782360472</td>
                    <td>201852786528</td>
                    <td>21.65</td>
                  </tr>
                  <tr>
                    <td>511223</td>
                    <td>Beban Tunj. Struktural TNI/POLRI</td>
                    <td>325321768000</td>
                    <td>71611399575</td>
                    <td>253710368425</td>
                    <td>22.01</td>
                  </tr>
                  <tr>
                    <td>511224</td>
                    <td>Beban Tunj. Fungsional TNI/POLRI</td>
                    <td>4502580000</td>
                    <td>1078757100</td>
                    <td>3423822900</td>
                    <td>23.96</td>
                  </tr>
                  <tr>
                    <td>511225</td>
                    <td>Beban Tunj. PPh TNI/POLRI</td>
                    <td>10885072000</td>
                    <td>1406376214</td>
                    <td>9478695786</td>
                    <td>12.92</td>
                  </tr>
                  <tr>
                    <td>511226</td>
                    <td>Beban Tunj. Beras TNI/POLRI</td>
                    <td>1027797816000</td>
                    <td>245326293989</td>
                    <td>782471522011</td>
                    <td>23.87</td>
                  </tr>
                  <tr>
                    <td>511228</td>
                    <td>Beban Tunj. Lauk pauk TNI/POLRI</td>
                    <td>6782013014000</td>
                    <td>1664452628600</td>
                    <td>5117560385400</td>
                    <td>24.54</td>
                  </tr>
                  <tr>
                    <td>511232</td>
                    <td>Beban Tunj. Kowan/Polwan TNI TNI/POLRI</td>
                    <td>2226045000</td>
                    <td>537324125</td>
                    <td>1688720875</td>
                    <td>24.14</td>
                  </tr>
                  <tr>
                    <td>511233</td>
                    <td>Beban Tunj. Babinkamtibmas TNI/POLRI</td>
                    <td>35358618000</td>
                    <td>8853300000</td>
                    <td>26505318000</td>
                    <td>25.04</td>
                  </tr>
                  <tr>
                    <td>511234</td>
                    <td>Beban Tunj. Khusus Papua untuk TNI/POLRI</td>
                    <td>100861284000</td>
                    <td>22911800000</td>
                    <td>77949484000</td>
                    <td>22.72</td>
                  </tr>
                  <tr>
                    <td>511235</td>
                    <td>Beban Tunj. Kompensasi Kerja Bidang Persandian TNI/POLRI</td>
                    <td>6603488000</td>
                    <td>2613978775</td>
                    <td>3989509225</td>
                    <td>39.58</td>
                  </tr>
                  <tr>
                    <td>511237</td>
                    <td>Beban Tunj. Keahlian/Keterampilan TNI/POLRI</td>
                    <td>132767704000</td>
                    <td>1855505000</td>
                    <td>130912199000</td>
                    <td>1.40</td>
                  </tr>
                  <tr>
                    <td>511239</td>
                    <td>Beban Tunjangan Operasi Pengamanan pada Pulau Terluar dan Wilayah Perbatasan TNI</td>
                    <td>167575172000</td>
                    <td>38539345706</td>
                    <td>129035826294</td>
                    <td>23.00</td>
                  </tr>
                  <tr>
                    <td>511241</td>
                    <td>Beban Tunjangan Medis TNI/POLRI</td>
                    <td>4981307000</td>
                    <td>1045455750</td>
                    <td>3935851250</td>
                    <td>20.99</td>
                  </tr>
                  <tr>
                    <td>511242</td>
                    <td>Beban Tunj. Lain-lain Termasuk Uang Duka TNI/POLRI</td>
                    <td>7044000</td>
                    <td>0</td>
                    <td>7044000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>511243</td>
                    <td>Beban Tunjangan Daerah Terpencil/Sangat Terpencil TNI/Polri</td>
                    <td>21194567000</td>
                    <td>3109021525</td>
                    <td>18085545475</td>
                    <td>14.67</td>
                  </tr>
                  <tr>
                    <td>511244</td>
                    <td>Beban Tunjangan Umum TNI/Polri</td>
                    <td>293758659000</td>
                    <td>62254156403</td>
                    <td>231504502597</td>
                    <td>21.19</td>
                  </tr>
                  <tr>
                    <td>511245</td>
                    <td>Beban Santunan Cacat TNI</td>
                    <td>18343503000</td>
                    <td>1916816329</td>
                    <td>16426686671</td>
                    <td>10.45</td>
                  </tr>
                  <tr>
                    <td>512211</td>
                    <td>Beban Uang Lembur</td>
                    <td>16345418000</td>
                    <td>1752178800</td>
                    <td>14593239200</td>
                    <td>10.72</td>
                  </tr>
                  <tr>
                    <td>512411</td>
                    <td>Beban Pegawai (Tunjangan Khusus/Kegiatan/Kinerja)</td>
                    <td>6660263716000</td>
                    <td>1656685577297</td>
                    <td>5003578138703</td>
                    <td>24.87</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td>28920253845000</td>
                    <td>6797571097668</td>
                    <td>22122682747332</td>
                    <td>23.50</td>
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