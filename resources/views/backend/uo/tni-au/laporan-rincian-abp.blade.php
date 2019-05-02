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
                            <td>228446378000</td>
                            <td>44115545402</td>
                            <td>184330832598</td>
                            <td>19.31</td>
                          </tr>
                          <tr>
                            <td>511169</td>
                            <td>Beban Pembulatan Gaji PNS TNI/Polri</td>
                            <td>4721000</td>
                            <td>666978</td>
                            <td>4054022</td>
                            <td>14.13</td>
                          </tr>
                          <tr>
                            <td>511171</td>
                            <td>Beban Tunj. Suami/Istri PNS TNI/Polri</td>
                            <td>15047208000</td>
                            <td>2988923478</td>
                            <td>12058284522</td>
                            <td>19.86</td>
                          </tr>
                          <tr>
                            <td>511172</td>
                            <td>Beban Tunj. Anak PNS TNI/Polri</td>
                            <td>4682078000</td>
                            <td>904492346</td>
                            <td>3777585654</td>
                            <td>19.32</td>
                          </tr>
                          <tr>
                            <td>511173</td>
                            <td>Beban Tunj. Struktural PNS TNI/Polri</td>
                            <td>6378540000</td>
                            <td>1101329650</td>
                            <td>5277210350</td>
                            <td>17.27</td>
                          </tr>
                          <tr>
                            <td>511174</td>
                            <td>Beban Tunj. Fungsional PNS TNI/Polri</td>
                            <td>4168230000</td>
                            <td>755124300</td>
                            <td>3413105700</td>
                            <td>18.12</td>
                          </tr>
                          <tr>
                            <td>511175</td>
                            <td>Beban Tunj. PPh PNS TNI/Polri</td>
                            <td>975290000</td>
                            <td>9996553</td>
                            <td>965293447</td>
                            <td>1.02</td>
                          </tr>
                          <tr>
                            <td>511176</td>
                            <td>Beban Tunj. Beras PNS TNI/Polri</td>
                            <td>13186643000</td>
                            <td>2807426650</td>
                            <td>10379216350</td>
                            <td>21.29</td>
                          </tr>
                          <tr>
                            <td>511179</td>
                            <td>Beban Uang Makan PNS TNI/Polri</td>
                            <td>44199095000</td>
                            <td>8758856650</td>
                            <td>35440238350</td>
                            <td>19.82</td>
                          </tr>
                          <tr>
                            <td>511185</td>
                            <td>Beban Tunj. Daerah Terpencil/Sangat Terpencil PNS TNI/Polri</td>
                            <td>130300000</td>
                            <td>14600000</td>
                            <td>115700000</td>
                            <td>11.20</td>
                          </tr>
                          <tr>
                            <td>511189</td>
                            <td>Beban Tunjangan Khusus Papua PNS TNI/Polri</td>
                            <td>438850000</td>
                            <td>64500000</td>
                            <td>374350000</td>
                            <td>14.70</td>
                          </tr>
                          <tr>
                            <td>511193</td>
                            <td>Beban Tunjangan Umum PNS TNI/Polri</td>
                            <td>10614251000</td>
                            <td>1944348089</td>
                            <td>8669902911</td>
                            <td>18.32</td>
                          </tr>
                          <tr>
                            <td>511211</td>
                            <td>Beban Gaji Pokok TNI/POLRI</td>
                            <td>1144733662000</td>
                            <td>275189302756</td>
                            <td>869544359244</td>
                            <td>24.04</td>
                          </tr>
                          <tr>
                            <td>511219</td>
                            <td>Beban Pembulatan Gaji TNI/POLRI</td>
                            <td>185490000</td>
                            <td>3315554</td>
                            <td>182174446</td>
                            <td>1.79</td>
                          </tr>
                          <tr>
                            <td>511221</td>
                            <td>Beban Tunj. Suami/Istri TNI/POLRI</td>
                            <td>96348649000</td>
                            <td>21515851299</td>
                            <td>74832797701</td>
                            <td>22.33</td>
                          </tr>
                          <tr>
                            <td>511222</td>
                            <td>Beban Tunj. Anak TNI/POLRI</td>
                            <td>31963778000</td>
                            <td>6646770456</td>
                            <td>25317007544</td>
                            <td>20.79</td>
                          </tr>
                          <tr>
                            <td>511223</td>
                            <td>Beban Tunj. Struktural TNI/POLRI</td>
                            <td>99315385000</td>
                            <td>22167044964</td>
                            <td>77148340036</td>
                            <td>22.32</td>
                          </tr>
                          <tr>
                            <td>511224</td>
                            <td>Beban Tunj. Fungsional TNI/POLRI</td>
                            <td>4024425000</td>
                            <td>395453100</td>
                            <td>3628971900</td>
                            <td>9.83</td>
                          </tr>
                          <tr>
                            <td>511225</td>
                            <td>Beban Tunj. PPh TNI/POLRI</td>
                            <td>5615646000</td>
                            <td>388176224</td>
                            <td>5227469776</td>
                            <td>6.91</td>
                          </tr>
                          <tr>
                            <td>511226</td>
                            <td>Beban Tunj. Beras TNI/POLRI</td>
                            <td>109406865000</td>
                            <td>26693709228</td>
                            <td>82713155772</td>
                            <td>24.40</td>
                          </tr>
                          <tr>
                            <td>511228</td>
                            <td>Beban Tunj. Lauk pauk TNI/POLRI</td>
                            <td>717562108000</td>
                            <td>182081770000</td>
                            <td>535480338000</td>
                            <td>25.38</td>
                          </tr>
                          <tr>
                            <td>511232</td>
                            <td>Beban Tunj. Kowan/Polwan TNI TNI/POLRI</td>
                            <td>1181410000</td>
                            <td>240750000</td>
                            <td>940660000</td>
                            <td>20.38</td>
                          </tr>
                          <tr>
                            <td>511234</td>
                            <td>Beban Tunj. Khusus Papua untuk TNI/POLRI</td>
                            <td>8085450000</td>
                            <td>1783850000</td>
                            <td>6301600000</td>
                            <td>22.06</td>
                          </tr>
                          <tr>
                            <td>511235</td>
                            <td>Beban Tunj. Kompensasi Kerja Bidang Persandian TNI/POLRI</td>
                            <td>2402930000</td>
                            <td>540650000</td>
                            <td>1862280000</td>
                            <td>22.50</td>
                          </tr>
                          <tr>
                            <td>511236</td>
                            <td>Beban Tunj. Brevet TNI/POLRI</td>
                            <td>21831740000</td>
                            <td>3108905000</td>
                            <td>18722835000</td>
                            <td>14.24</td>
                          </tr>
                          <tr>
                            <td>511237</td>
                            <td>Beban Tunj. Keahlian/Keterampilan TNI/POLRI</td>
                            <td>8184360000</td>
                            <td>1416335000</td>
                            <td>6768025000</td>
                            <td>17.31</td>
                          </tr>
                          <tr>
                            <td>511238</td>
                            <td>Beban Tunj. Keterampilan Khusus TNI/POLRI</td>
                            <td>16076800000</td>
                            <td>2105040000</td>
                            <td>13971760000</td>
                            <td>13.09</td>
                          </tr>
                          <tr>
                            <td>511239</td>
                            <td>Beban Tunjangan Operasi Pengamanan pada Pulau Terluar dan Wilayah Perbatasan TNI</td>
                            <td>23602276000</td>
                            <td>4208288297</td>
                            <td>19393987703</td>
                            <td>17.83</td>
                          </tr>
                          <tr>
                            <td>511243</td>
                            <td>Beban Tunjangan Daerah Terpencil/Sangat Terpencil TNI/Polri</td>
                            <td>1415325000</td>
                            <td>204819225</td>
                            <td>1210505775</td>
                            <td>14.47</td>
                          </tr>
                          <tr>
                            <td>511244</td>
                            <td>Beban Tunjangan Umum TNI/Polri</td>
                            <td>42890903000</td>
                            <td>5799729896</td>
                            <td>37091173104</td>
                            <td>13.52</td>
                          </tr>
                          <tr>
                            <td>511245</td>
                            <td>Beban Santunan Cacat TNI</td>
                            <td>250000000</td>
                            <td>29285850</td>
                            <td>220714150</td>
                            <td>11.71</td>
                          </tr>
                          <tr>
                            <td>512211</td>
                            <td>Beban Uang Lembur</td>
                            <td>1138143000</td>
                            <td>99662000</td>
                            <td>1038481000</td>
                            <td>8.76</td>
                          </tr>
                          <tr>
                            <td>512411</td>
                            <td>Beban Pegawai (Tunjangan Khusus/Kegiatan/Kinerja)</td>
                            <td>881442516000</td>
                            <td>216410637389</td>
                            <td>665031878611</td>
                            <td>24.55</td>
                          </tr>
                </tbody>
                <tfoot>
                  <tr>
                            <td></td>
                            <td>TOTAL</td>
                            <td>3545929445000</td>
                            <td>834495156334</td>
                            <td>2711434288666</td>
                            <td>23.53</td>
                          </tr>                </tfoot>
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