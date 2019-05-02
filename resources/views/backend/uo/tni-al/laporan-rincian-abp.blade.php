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
                        <td>357863651000</td>
                        <td>73643740104</td>
                        <td>284219910896</td>
                        <td>20.58</td>
                      </tr>
                      <tr>
                        <td>511169</td>
                        <td>Beban Pembulatan Gaji PNS TNI/Polri</td>
                        <td>8176000</td>
                        <td>1113755</td>
                        <td>7062245</td>
                        <td>13.62</td>
                      </tr>
                      <tr>
                        <td>511171</td>
                        <td>Beban Tunj. Suami/Istri PNS TNI/Polri</td>
                        <td>26376877000</td>
                        <td>5039995893</td>
                        <td>21336881107</td>
                        <td>19.11</td>
                      </tr>
                      <tr>
                        <td>511172</td>
                        <td>Beban Tunj. Anak PNS TNI/Polri</td>
                        <td>8690694000</td>
                        <td>1546170652</td>
                        <td>7144523348</td>
                        <td>17.79</td>
                      </tr>
                      <tr>
                        <td>511173</td>
                        <td>Beban Tunj. Struktural PNS TNI/Polri</td>
                        <td>16359391000</td>
                        <td>2245885000</td>
                        <td>14113506000</td>
                        <td>13.73</td>
                      </tr>
                      <tr>
                        <td>511174</td>
                        <td>Beban Tunj. Fungsional PNS TNI/Polri</td>
                        <td>8430641000</td>
                        <td>1849914200</td>
                        <td>6580726800</td>
                        <td>21.94</td>
                      </tr>
                      <tr>
                        <td>511175</td>
                        <td>Beban Tunj. PPh PNS TNI/Polri</td>
                        <td>3364714000</td>
                        <td>21641749</td>
                        <td>3343072251</td>
                        <td>0.64</td>
                      </tr>
                      <tr>
                        <td>511176</td>
                        <td>Beban Tunj. Beras PNS TNI/Polri</td>
                        <td>20944266000</td>
                        <td>4624458300</td>
                        <td>16319807700</td>
                        <td>22.08</td>
                      </tr>
                      <tr>
                        <td>511179</td>
                        <td>Beban Uang Makan PNS TNI/Polri</td>
                        <td>79517808000</td>
                        <td>11909709600</td>
                        <td>67608098400</td>
                        <td>14.98</td>
                      </tr>
                      <tr>
                        <td>511185</td>
                        <td>Beban Tunj. Daerah Terpencil/Sangat Terpencil PNS TNI/Polri</td>
                        <td>94100000</td>
                        <td>5875000</td>
                        <td>88225000</td>
                        <td>6.24</td>
                      </tr>
                      <tr>
                        <td>511189</td>
                        <td>Beban Tunjangan Khusus Papua PNS TNI/Polri</td>
                        <td>1491840000</td>
                        <td>314650000</td>
                        <td>1177190000</td>
                        <td>21.09</td>
                      </tr>
                      <tr>
                        <td>511191</td>
                        <td>Beban Tunjangan Medis PNS TNI/POLRI</td>
                        <td>295132000</td>
                        <td>24225000</td>
                        <td>270907000</td>
                        <td>8.21</td>
                      </tr>
                      <tr>
                        <td>511192</td>
                        <td>Beban Tunj. Lain-lain Termasuk Uang Duka PNS TNI/POLRI</td>
                        <td>2434667000</td>
                        <td>3125000</td>
                        <td>2431542000</td>
                        <td>0.13</td>
                      </tr>
                      <tr>
                        <td>511193</td>
                        <td>Beban Tunjangan Umum PNS TNI/Polri</td>
                        <td>15572622000</td>
                        <td>2711285000</td>
                        <td>12861337000</td>
                        <td>17.41</td>
                      </tr>
                      <tr>
                        <td>511194</td>
                        <td>Beban Tunj. Kompensasi Kerja Bidang Persandian PNS TNI/Polri</td>
                        <td>5000000</td>
                        <td>1500000</td>
                        <td>3500000</td>
                        <td>30.00</td>
                      </tr>
                      <tr>
                        <td>511211</td>
                        <td>Beban Gaji Pokok TNI/POLRI</td>
                        <td>2512468964000</td>
                        <td>525886098835</td>
                        <td>1986582865165</td>
                        <td>20.93</td>
                      </tr>
                      <tr>
                        <td>511219</td>
                        <td>Beban Pembulatan Gaji TNI/POLRI</td>
                        <td>78247000</td>
                        <td>9111523</td>
                        <td>69135477</td>
                        <td>11.64</td>
                      </tr>
                      <tr>
                        <td>511221</td>
                        <td>Beban Tunj. Suami/Istri TNI/POLRI</td>
                        <td>206140051000</td>
                        <td>44169658929</td>
                        <td>161970392071</td>
                        <td>21.43</td>
                      </tr>
                      <tr>
                        <td>511222</td>
                        <td>Beban Tunj. Anak TNI/POLRI</td>
                        <td>72266731000</td>
                        <td>14264850094</td>
                        <td>58001880906</td>
                        <td>19.74</td>
                      </tr>
                      <tr>
                        <td>511223</td>
                        <td>Beban Tunj. Struktural TNI/POLRI</td>
                        <td>139456985000</td>
                        <td>30341445000</td>
                        <td>109115540000</td>
                        <td>21.76</td>
                      </tr>
                      <tr>
                        <td>511224</td>
                        <td>Beban Tunj. Fungsional TNI/POLRI</td>
                        <td>833450000</td>
                        <td>176085000</td>
                        <td>657365000</td>
                        <td>21.13</td>
                      </tr>
                      <tr>
                        <td>511225</td>
                        <td>Beban Tunj. PPh TNI/POLRI</td>
                        <td>15815416000</td>
                        <td>527684204</td>
                        <td>15287731796</td>
                        <td>3.34</td>
                      </tr>
                      <tr>
                        <td>511226</td>
                        <td>Beban Tunj. Beras TNI/POLRI</td>
                        <td>230802229000</td>
                        <td>54079068992</td>
                        <td>176723160008</td>
                        <td>23.43</td>
                      </tr>
                      <tr>
                        <td>511228</td>
                        <td>Beban Tunj. Lauk pauk TNI/POLRI</td>
                        <td>1365140913000</td>
                        <td>345319280000</td>
                        <td>1019821633000</td>
                        <td>25.30</td>
                      </tr>
                      <tr>
                        <td>511232</td>
                        <td>Beban Tunj. Kowan/Polwan TNI TNI/POLRI</td>
                        <td>1439090000</td>
                        <td>305250000</td>
                        <td>1133840000</td>
                        <td>21.21</td>
                      </tr>
                      <tr>
                        <td>511234</td>
                        <td>Beban Tunj. Khusus Papua untuk TNI/POLRI</td>
                        <td>9233575000</td>
                        <td>2140750000</td>
                        <td>7092825000</td>
                        <td>23.18</td>
                      </tr>
                      <tr>
                        <td>511235</td>
                        <td>Beban Tunj. Kompensasi Kerja Bidang Persandian TNI/POLRI</td>
                        <td>11470123000</td>
                        <td>1945124826</td>
                        <td>9524998174</td>
                        <td>16.96</td>
                      </tr>
                      <tr>
                        <td>511236</td>
                        <td>Beban Tunj. Brevet TNI/POLRI</td>
                        <td>11862100000</td>
                        <td>0</td>
                        <td>11862100000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>511237</td>
                        <td>Beban Tunj. Keahlian/Keterampilan TNI/POLRI</td>
                        <td>5750976000</td>
                        <td>22570000</td>
                        <td>5728406000</td>
                        <td>0.39</td>
                      </tr>
                      <tr>
                        <td>511239</td>
                        <td>Beban Tunjangan Operasi Pengamanan pada Pulau Terluar dan Wilayah Perbatasan TNI</td>
                        <td>76116982000</td>
                        <td>10086174579</td>
                        <td>66030807421</td>
                        <td>13.25</td>
                      </tr>
                      <tr>
                        <td>511241</td>
                        <td>Beban Tunjangan Medis TNI/POLRI</td>
                        <td>1459749000</td>
                        <td>77352500</td>
                        <td>1382396500</td>
                        <td>5.30</td>
                      </tr>
                      <tr>
                        <td>511242</td>
                        <td>Beban Tunj. Lain-lain Termasuk Uang Duka TNI/POLRI</td>
                        <td>7820005000</td>
                        <td>35159000</td>
                        <td>7784846000</td>
                        <td>0.45</td>
                      </tr>
                      <tr>
                        <td>511243</td>
                        <td>Beban Tunjangan Daerah Terpencil/Sangat Terpencil TNI/Polri</td>
                        <td>1518100000</td>
                        <td>202711571</td>
                        <td>1315388429</td>
                        <td>13.35</td>
                      </tr>
                      <tr>
                        <td>511244</td>
                        <td>Beban Tunjangan Umum TNI/Polri</td>
                        <td>75373358000</td>
                        <td>11978578231</td>
                        <td>63394779769</td>
                        <td>15.89</td>
                      </tr>
                      <tr>
                        <td>511245</td>
                        <td>Beban Santunan Cacat TNI</td>
                        <td>10714778000</td>
                        <td>372084000</td>
                        <td>10342694000</td>
                        <td>3.47</td>
                      </tr>
                      <tr>
                        <td>512211</td>
                        <td>Beban Uang Lembur</td>
                        <td>6096800000</td>
                        <td>0</td>
                        <td>6096800000</td>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <td>512411</td>
                        <td>Beban Pegawai (Tunjangan Khusus/Kegiatan/Kinerja)</td>
                        <td>1527151213000</td>
                        <td>377948248042</td>
                        <td>1149202964958</td>
                        <td>24.75</td>
                      </tr>
                
                  
                </tbody>
                <tfoot>
                  <tr>
                        <td></td>
                        <td>TOTAL</td>
                        <td>6830459414000</td>
                        <td>1523830574579</td>
                        <td>5306628839421</td>
                        <td>22.31</td>
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