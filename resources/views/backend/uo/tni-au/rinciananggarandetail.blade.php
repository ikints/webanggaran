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
            <div class="box-header padding-bottom-20 text-center">
              <h4 class="box-title">Riwayat Revisi Anggaran</h4><br>
              <h3 class="box-title">012.22 - Kementerian Pertahanan</h3><br>
              <h3 class="box-title">Tahun 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box box-solid">
                  <a href="{{ URL('cms/tni-au/uo/anggaran') }}" class="btn btn-success btn-flat margin-top-50"><i class="fa fa-list"></i> Lihat Anggaran</a>
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-7">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td style="padding: 0px;">Unit Kerja</td>
                            <td style="padding: 0px;">: 34422 - ZIDAM III Siliwangi</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Nama Program</td>
                            <td style="padding: 0px;">: 012.22.14 - Program Dukungan Kesiapan Matra Darat</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Kegiatan</td>
                            <td style="padding: 0px;">: 1444 - Penyelenggaraan Intelejen dan Pengamanan Matra Darat</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Output</td>
                            <td style="padding: 0px;">: 1444.001 - "Intelejen dan Pengamanan Matra Darat [Baseline]</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Sub Output</td>
                            <td style="padding: 0px;">: 1444.001.001 - Intelejen dan Pengamanan</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Komponen</td>
                            <td style="padding: 0px;">: 003 - Dukungan Operasional Pertahanan dan Keamanan</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Sub Komponen</td>
                            <td style="padding: 0px;">: B - Kegiatan Pengamanan</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Akun</td>
                            <td style="padding: 0px;">: 5212111 - Belanja Barang Operasional Lainnya</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Detil</td>
                            <td style="padding: 0px;">: Kegiatan Pengamanan</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                  
                </div>

                </div>  

                <div class="row">
                  <div class="col-md-12">
                      <h3>Riwayat Revisi</h3>
                      <div class="box-body">

                        <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Revisi Ke -</th>
                                <th>No. DIPA</th>
                                <th>Tanggal</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>SP DIPA-012.01.1.686065/2019</td>
                                <td>1 Jan 2019</td>
                                <td>1</td>
                                <td>GIAT</td>
                                <td>11.000.000</td>
                                <td>11.000.000</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>SP DIPA-012.01.1.686065/2019</td>
                                <td>1 Mar 2019</td>
                                <td>1</td>
                                <td>GIAT</td>
                                <td>15.000.000</td>
                                <td>15.000.000</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>SP DIPA-012.01.1.686065/2019</td>
                                <td>1 Jul 2019</td>
                                <td>1</td>
                                <td>GIAT</td>
                                <td>17.000.000</td>
                                <td>17.000.000</td>
                              </tr>
                            </tbody>
                        </table>
                        
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>


            </div>
          <!-- /.box-body -->
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
    $('#tablelist').DataTable();
  })
</script>
@endsection