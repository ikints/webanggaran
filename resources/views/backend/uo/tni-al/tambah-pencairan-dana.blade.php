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
            <div class="box-header padding-bottom-50 text-center">
              <h4 class="box-title">Input Realisasi Anggaran</h4><br>
              <h3 class="box-title">Kementerian Pertahanan Republik Indonesia</h3><br>
              <h3 class="box-title">Tahun 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="padding-bottom-20">
                  <a href="{{ URL('cms/tni-al/uo/realisasi-anggaran') }}" class="btn btn-success btn-flat"><i class="fa fa-list"></i> Lihat Daftar Realisasi Anggaran</a>
                </div>
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-7">
                      <div class="box-body margin-bottom-20 margin-top-10">
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
                          <tr>
                            <td style="padding: 0px;">Jumlah Anggaran</td>
                            <td style="padding: 0px;">: 16.000.000</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Total Penyerapan</td>
                            <td style="padding: 0px;">: 9.000.000</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Sisa Anggaran</td>
                            <td style="padding: 0px;">: 7.000.000</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  
                </div>

                </div>

                <div class="padding-bottom-20">
                  <div class="row">
                    <div class="col-md-5"> 
                      <h3>Riwayat Realisasi Anggaran</h3>
                    </div>
                  </div>
                  
                </div>
                <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Tanggal</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1 Jan 2019</td>
                                <td>1</td>
                                <td>GIAT</td>
                                <td>1.000.000</td>
                                <td>1.000.000</td>
                              </tr>
                              <tr>
                                <td>1 Mar 2019</td>
                                <td>1</td>
                                <td>GIAT</td>
                                <td>5.000.000</td>
                                <td>5.000.000</td>
                              </tr>
                              <tr>
                                <td>1 Jul 2019</td>
                                <td>1</td>
                                <td>GIAT</td>
                                <td>3.000.000</td>
                                <td>3.000.000</td>
                              </tr>
                            </tbody>
                        </table>
                        
                      </div>

                <div class="row">
            <div class="col-md-5">
              
                <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

                  <!-- form start -->
                  <form class="form-horizontal" action="{{ url('cms/realisasi-anggaran-detail') }}">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tanggal</label>

                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Tanggal">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Volume</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Volume">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Harga Satuan</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Harga Satuan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Jumlah</label>

                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Jumlah">
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                  
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