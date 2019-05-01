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
              <h4 class="box-title report-title">LAPORAN PELAKSANAAN ANGGARAN BELANJA MODAL</h4><br>
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
                    <td>531111</td>
                    <td>Belanja Modal Tanah</td>
                    <td>4730364000</td>
                    <td>0</td>
                    <td>4730364000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>532111</td>
                    <td>Belanja Modal Peralatan dan Mesin</td>
                    <td>17482144336000</td>
                    <td>22938149860</td>
                    <td>17459206186140</td>
                    <td>0.13</td>
                  </tr>
                  <tr>
                    <td>533111</td>
                    <td>Belanja Modal Gedung dan Bangunan</td>
                    <td>417128893000</td>
                    <td>14706158119</td>
                    <td>402422734881</td>
                    <td>3.53</td>
                  </tr>
                  <tr>
                    <td>533113</td>
                    <td>Belanja Modal Upah Tenaga Kerja dan Honor Pengelola Teknis Gedung dan Bangunan</td>
                    <td>578834000</td>
                    <td>0</td>
                    <td>578834000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>533115</td>
                    <td>Belanja Modal Perencanaan dan Pengawasan Gedung dan Bangunan</td>
                    <td>1711451000</td>
                    <td>0</td>
                    <td>1711451000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>533117</td>
                    <td>Belanja Modal Pengosongan dan Pembongkaran Bangunan Lama, Gedung dan Bangunan</td>
                    <td>5872131000</td>
                    <td>289199750</td>
                    <td>5582931250</td>
                    <td>4.92</td>
                  </tr>
                  <tr>
                    <td>534111</td>
                    <td>Belanja Modal Jalan dan Jembatan</td>
                    <td>186000000000</td>
                    <td>1106607500</td>
                    <td>184893392500</td>
                    <td>0.59</td>
                  </tr>
                  <tr>
                    <td>536111</td>
                    <td>Belanja Modal Lainnya</td>
                    <td>69083677000</td>
                    <td>6235291434</td>
                    <td>62848385566</td>
                    <td>9.03</td>
                  </tr>
                  
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td>18167249686000</td>
                    <td>45275406663</td>
                    <td>18121974279337</td>
                    <td>0.25</td>
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