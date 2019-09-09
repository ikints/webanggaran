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
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-7">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td style="padding: 0px;">Unit Organisasi</td>
                            <td style="padding: 0px;">: 22 - Kementerian Pertahanan</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Kode Program</td>
                            <td style="padding: 0px;">: 1444-001</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Nama Program</td>
                            <td style="padding: 0px;">: Intelejen dan Pengamanan Matra Darat [Base Line]</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Total Anggaran</td>
                            <td style="padding: 0px;">: Rp. 28.909.920.000</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Total Penyerapan</td>
                            <td style="padding: 0px;">: Rp. 18.909.920.000</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Sisa Anggaran</td>
                            <td style="padding: 0px;">: Rp. 8.909.920.000</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Waktu Anggaran</td>
                            <td style="padding: 0px;">Januari 2019 s/d Maret 2019</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                  
                </div>

                </div>  

                <div class="row">
                  <div class="col-md-5 col-md-offset-4">
                    
                      <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

                        <!-- form start -->
                        <form class="form-group">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="inputEmail3">Jumlah Realisasi/Penyerapan</label>
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Jumlah Realisasi/Penyerapan">
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