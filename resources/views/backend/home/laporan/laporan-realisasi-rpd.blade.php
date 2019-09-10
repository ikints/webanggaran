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
              <h4 class="box-title report-title">Laporan Realisasi RPD</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">Periode 31 Januari 2019 s/d 31 Maret 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box box-solid">
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="chart-responsive">
                            <div id="rpd" style="height: 400px"></div>
                          </div>
                          <!-- ./chart-responsive -->
                        </div>
                      </div>
                  </div>
                </div>

                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th rowspan="2" class="text-center">PROGRAM/KEGIATAN/OUTPUT/SUBOUPUT&nbsp;KOMPONEN/SUBKOMPONEN/AKUN/DETIL</th>
                        <th rowspan="2" class="text-center">Anggaran</th>
                        <th colspan="2" class="text-center">Januari</th>
                        <th colspan="2" class="text-center">Februari</th>
                        <th colspan="2" class="text-center">Maret</th>
                        <th colspan="2" class="text-center">April</th>
                        <th colspan="2" class="text-center">Mei</th>
                        <th colspan="2" class="text-center">Juni</th>
                        <th colspan="2" class="text-center">Juli</th>
                        <th colspan="2" class="text-center">Agustus</th>
                        <th colspan="2" class="text-center">September</th>
                        <th colspan="2" class="text-center">Oktober</th>
                        <th colspan="2" class="text-center">November</th>
                        <th colspan="2" class="text-center">Desember</th>
                        <th rowspan="2" class="text-center">Total Realisasi</th>
                      </tr>
                      <tr>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        <th>RPD</th>
                        <th>Realisasi</th>
                        
                      </tr>
                      <tr>
                        <th>(1)</th>
                        <th>(2)</th>
                        <th>(3)</th>
                        <th>(4)</th>
                        <th>(5)</th>
                        <th>(6)</th>
                        <th>(7)</th>
                        <th>(8)</th>
                        <th>(9)</th>
                        <th>(10)</th>
                        <th>(11)</th>
                        <th>(12)</th>
                        <th>(13)</th>
                        <th>(14)</th>
                        <th>(15)</th>
                        <th>(16)</th>
                        <th>(17)</th>
                        <th>(18)</th>
                        <th>(19)</th>
                        <th>(21)</th>
                        <th>(22)</th>
                        <th>(23)</th>
                        <th>(24)</th>
                        <th>(25)</th>
                        <th>(26)</th>
                        <th>(27)</th>
                        <th>(28)</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>012.22.14 - Program Dukungan Kesiapan Matra Darat</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;1444 - Penyelenggaraan Intelejen dan Pengamanan Matra Darat</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1444.001 - "Intelejen dan Pengamanan Matra Darat [Baseline]"</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1444.001.001 - Intelejen dan Pengamanan</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;003 - Dukungan Operasional Pertahanan dan Keamanan</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B - Kegiatan Pengamanan</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212111 - Belanja Barang Operasional Lainnya</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/edit-rencana-penarikan-dana') }}">Kegiatan Pengamanan</a></td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212112 - Belanja Barang Operasional Lainnya</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr id="anggaran-terlambat">
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/edit-rencana-penarikan-dana') }}">P4GN</a></td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;1451 - Pemeliharaan/Perawatan Non Alutsista</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1451.001 - Materil Non Alutsista yang Terpelihara [Baseline]</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1451.001.004 - Pemeliharaan Alzi </td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;003 - Dukungan Operasional Pertahanan dan Keamanan</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A - Pemeliharaan Alzi</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212111 - Belanja Barang Operasional Lainnya</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/edit-rencana-penarikan-dana') }}">Kegiatan Pengamanan</a></td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212112 - Belanja Barang Operasional Lainnya</td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr id="anggaran-terlambat">
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/edit-rencana-penarikan-dana') }}">P4GN</a></td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>
                          9.500.000 (89%)
                        </td>
                      </tr>
                      <tr>
                        <td class="text-right"><h4>Total</h4></td>
                        <td>32.000.000</td>
                        <td>4.500.000</td>
                        <td>4.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>2.000.000(80%)</td>
                        <td>1.500.000</td>
                        <td>500.000(70%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(90%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>5.500.000</td>
                        <td>4.500.000(80%)</td>
                        <td>2.500.000</td>
                        <td>2.500.000(100%)</td>
                        <td>2.000.000</td>
                        <td>1.200.000(55%)</td>
                        <td>1.500.000</td>
                        <td>100.000(10%)</td>
                        <td>2.500.000</td>
                        <td>1.800.000(90%)</td>
                        <td>2.500.000</td>
                        <td>1.500.000(60%)</td>
                        <td>1.500.000</td>
                        <td>1.000.000(750%)</td>
                        <td>9.500.000 (89%)
                        </td>
                      </tr>
                      
        
                    </tbody>
                  </table>
                </div>

                
            </div>
        </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('extra-js')
<script src="{{ URL('public/highcharts/highcharts.js') }}"></script>
<script src="{{ URL('public/highcharts/highcharts-3d.js') }}"></script>
<script type="text/javascript">

Highcharts.chart('rpd', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Januari',
            'Februari',
            'Maret',
            'April',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Persentase'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },    
    credits: {
        enabled: false
    },
    series: [{
      showInLegend: true,
        name: 'Realisasi RPD',
        data: [20, 65, 87, 30]

    }]
});


</script>
@endsection