@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
            <div class="box-header padding-bottom-50">
              <h4 class="box-title">Realisasi Anggaran Tahun 2019</h4><br>
              <h3 class="box-title">Unit Kerja : 344202 ZIDAM III/SLW</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-12">
                      <div class="box-body margin-bottom-20 margin-top-10">
                        <!-- form start -->
                        <form class="form">
                          <div class="box-body">
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3">Unit Organisasi</label>
                                  <select class="form-control">
                                      <option>--Pilih Unit Organisasi--</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Kotama</label>
                                  <select class="form-control">
                                      <option>--Pilih Kotama--</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Satuan Kerja</label>
                                  <select class="form-control">
                                      <option>--Pilih Satuan Kerja--</option>
                                  </select>                        
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3">Program</label>
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Program">
                                </div>
                              </div>
                              <div class="col-md-2 padding-top-25">
                                <button type="submit" class="btn btn-info btn-block"><i class="fa fa-search"></i> Cari </button>
                              </div>
                            </div>
                            
                            
                            
                          </div>
                        </form>
                        
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  
                </div>

                </div>

                <div class="padding-bottom-20">
                  <a href="{{ URL('cms/satker/tambah-realisasi-anggaran') }}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Tambah Realisasi Dana Program</a>
                </div>


                <table class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Program</th>
                    <th>Jumlah Anggaran</th>
                    <th>Jumlah Realisasi</th>
                    <th>Pilihan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="{{ URL('cms/satker/realisasi-anggaran-detail') }}">012.22.14 - Program Dukungan Kesiapan Matra Darat</a></td>
                    <td>132.991.912</td>
                    <td>8.765.12</td>
                    <td><i class="fa fa-check-circle-o"></i></td>                  
                  </tr>
                  <tr>
                    <td><span class="padding-left-15">1444 - Penyelenggaraan Intelejen dan Pengamanan Matra Darat</span></td>
                    <td>20.991.912</td>
                    <td>8.765.12</td>
                    <td></td>                  
                  </tr>
                  <tr>
                    <td><span class="padding-left-25">1444.001 - Intelejen dan Pengamanan Matra Darat [Base Line]</span></td>
                    <td>20.991.912</td>
                    <td>8.765.12</td>
                    <td><i class="fa fa-check-circle-o"></i></td>                  
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
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