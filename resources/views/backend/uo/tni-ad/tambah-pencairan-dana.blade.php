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
            <div class="box-header padding-bottom-50">
              <h4 class="box-title">Rincian Realisasi Anggaran</h4><br>
              <h3 class="box-title">Kementerian Pertahanan Republik Indonesia</h3><br>
              <h3 class="box-title">Tahun 2019</h3>
              <div class="text-center"><h3 class="box-title">Tambah Pencairan Dana</h3></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="padding-bottom-20">
                  <a href="{{ URL('cms/tni-ad/uo/realisasi-anggaran') }}" class="btn btn-xs btn-success"><i class="fa fa-list"></i> Lihat Dafar Program</a>
                </div>
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-4">
                      <div class="box-body margin-bottom-20 margin-top-10">
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

                <div class="row">
            <div class="col-md-5 col-md-offset-4">
              
                <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

                  <!-- form start -->
                  <form class="form-horizontal" action="{{ url('cms/tni-ad/uo/realisasi-anggaran-detail') }}">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tanggal</label>

                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Tanggal">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Uraian</label>

                        <div class="col-sm-9">
                          <textarea class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Jumlah</label>

                        <div class="col-sm-3">
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