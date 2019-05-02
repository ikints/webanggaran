s@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Realisasi Dana Program</h3>
          </div>
          <div class="box-body">
          	<a href="{{ URL('cms/tni-ad/uo/realisasi-anggaran') }}" class="btn btn-xs btn-success margin-top-50"><i class="fa fa-list"></i> Lihat Daftar Program</a>
		    <a href="{{ URL('cms/tni-ad/uo/realisasi-anggaran') }}" class="btn btn-xs btn-success margin-top-50"><i class="fa fa-list"></i> Lihat Pencairan</a>
          	<div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-5">
                      <div class="box-body margin-bottom-20 margin-top-10">
                        <table class="table table-border">
                          <tr>
                            <td>Unit Organisasi</td><td>: 22 - TNI AD</td>
                          </tr>
                          <tr>
                            <td>Kode Program</td><td>: 1444-001</td>
                          </tr>
                          <tr>
                            <td>Nama Program</td><td>: Intelejen dan Pengamanan Matra Darat [Base Line]</td>
                          </tr>
                          <tr>
                            <td>Total Anggaran</td><td>: Rp. 28.909.920.000</td>
                          </tr>
                          <tr>
                            <td>Total Penyerapan</td><td>: Rp. 18.909.920.000</td>
                          </tr>
                          <tr>
                            <td>Sisa Anggaran</td><td>: Rp. 8.909.920.000</td>
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
			            <form class="form-horizontal">
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

          </div>
          <!-- /.box-body -->
        </div>


      </section>

    </div>

  </div>

 @endsection