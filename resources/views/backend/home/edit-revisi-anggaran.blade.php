@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Revisi Anggaran</h3>
          </div>
          <div class="box-body">
          	<div class="row">
		        <div class="col-md-5 col-md-offset-4">
		        	<a href="{{ URL('cms/revisi-anggaran') }}" class="btn btn-xs btn-success margin-top-50"><i class="fa fa-list"></i> Anggaran Kementerian</a>
		            <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">
		            	<div class="box box-solid">
			                <div class="box-body">
			                  <div class="row">
			                  <div class="col-md-12">
			                      <div class="box-body margin-bottom-20 margin-top-10">
			                        <table class="table table-border">
			                          <tr>
			                            <td>Program</td><td>: 012.22.14 - Program Dukungan Kesiapan Matra Darat</td>
			                          </tr>
			                          <tr>
			                            <td>Anggaran Semula</td><td>: 132.991.912</td>
			                          </tr>
			                          <tr>
			                            <td>Anggaran Terakhir</td><td>: 1.132.991.912</td>
			                          </tr>
			                          <tr>
			                            <td>Jumlah Revisi</td><td>: 1</td>
			                          </tr>
			                        </table>
			                      </div>
			                      <!-- /.box-body -->
			                    </div>
			                    <!-- /.box -->
			                  </div>
			                  
			                </div>

			                </div>

		            	<!-- form start -->
			            <form class="form-horizontal">
			              <div class="box-body">
			              	<div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Revisi Ke</label>

			                  <div class="col-sm-3">
			                    <input type="text" class="form-control" id="inputEmail3" placeholder="Revisi Ke">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Tanggal</label>

			                  <div class="col-sm-3">
			                    <input type="text" class="form-control" id="inputEmail3" placeholder="dd/mm/yyyy">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Catatan</label>

			                  <div class="col-sm-9">
			                    <textarea class="form-control"></textarea>
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">File</label>

			                  <div class="col-sm-9">
			                    <input type="file" class="form-control" id="inputEmail3">
			                  </div>
			                </div>
			              </div>
			              <!-- /.box-body -->
			              <div class="box-footer">
			                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Upload</button>
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