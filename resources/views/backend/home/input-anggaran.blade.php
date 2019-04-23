@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Input Anggaran</h3>
          </div>
          <div class="box-body">
          	<div class="row">
		        <div class="col-md-5 col-md-offset-4">
		        	<a href="{{ URL('cms/anggaran') }}" class="btn btn-xs btn-success margin-top-50"><i class="fa fa-list"></i> Lihat Data Anggaran</a>
		            <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

		            	<!-- form start -->
			            <form class="form-horizontal">
			              <div class="box-body">
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Tahun</label>

			                  <div class="col-sm-3">
			                    <input type="text" class="form-control" id="inputEmail3" placeholder="Tahun">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Satuan Kerja</label>

			                  <div class="col-sm-9">
			                    <select class="form-control">
			                    	<option>--Pilih Satuan Kerja--</option>
			                    </select>
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