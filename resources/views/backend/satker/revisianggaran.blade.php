@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
            <div class="box-header padding-bottom-50">
              <h4 class="box-title">Revisi Anggaran Tahun 2019</h4><br>
              <h3 class="box-title">Satuan Kerja</h3>
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
                              <div class="col-md-3 padding-top-25">
                                <div class="form-group">
                                  <a href="{{ URL('cms/satker/edit-semua-revisi-anggaran') }}" class="btn btn-block btn-success"><i class="fa fa-list"></i> Revisi Semua Anggaran</a>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3">Unit Organisasi</label>
                                  <select class="form-control">
                                      <option>--Pilih Unit Organisasi--</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="inputEmail3">Program</label>
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Program">
                                </div>
                              </div>
                              <div class="col-md-1 padding-top-25">
                                <button type="submit" class="btn btn-info btn-block"><i class="fa fa-search"></i> Cari </button>
                              </div>
                              <div class="col-md-1 padding-top-25">
                                <button type="submit" class="btn btn-info btn-block"> Reset </button>
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


                <table class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Program</th>
                    <th>Anggaran Semula</th>
                    <th>Jumlah Revisi</th>
                    <th>Anggaran Setelah Perubahan</th>
                    <th>Revisi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="{{ URL('cms/satker/revisi-anggaran-detail') }}">012.22.14 - Program Dukungan Kesiapan Matra Darat</a></td>
                    <td>132.991.912</td>
                    <td>1</td>
                    <td>1.132.991.912</td>
                    <td><a href="{{ URL('cms/satker/edit-revisi-anggaran') }}" class="btn btn-block btn-info"><i class="fa fa-pencil"></i> Revisi </a></td>                  
                  </tr>
                  <tr>
                    <td><span class="padding-left-15">1444 - Penyelenggaraan Intelejen dan Pengamanan Matra Darat</span></td>
                    <td>20.991.912</td>
                    <td>2</td>
                    <td>130.991.912</td>
                    <td><a href="{{ URL('cms/satker/edit-revisi-anggaran') }}" class="btn btn-block btn-info"><i class="fa fa-pencil"></i> Revisi </a></td>                  
                  </tr>
                  <tr>
                    <td><span class="padding-left-25">1444.001 - Intelejen dan Pengamanan Matra Darat [Base Line]</span></td>
                    <td>20.991.912</td>
                    <td>0</td>
                    <td>90.991.912</td>
                    <td><a href="{{ URL('cms/satker/edit-revisi-anggaran') }}" class="btn btn-block btn-info"><i class="fa fa-pencil"></i> Revisi </a></td>                  
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