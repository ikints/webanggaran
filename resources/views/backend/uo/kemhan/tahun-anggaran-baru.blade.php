@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Buat Anggaran Baru</h3>
          </div>
          <div class="box-header">
          	<p>
            	Membuat Tahun Anggaran Baru
            </p>
          </div>
          <div class="box-body">
          	<div class="row">
		        <div class="col-md-5 col-md-offset-4">
		        	<span class="text-green">Langkah 1 dari 3</span>
		            <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

		            <!-- /.box --><!-- form start -->
			            <form class="form" action="tambah-sumber-anggaran" method="get">
			              <div class="box-body">
			                <div class="form-group">
			                  <label for="inputEmail3">Tahun Anggaran</label>
			                  <input type="text" class="form-control" id="inputEmail3" placeholder="Tahun Anggaran">
			                </div>
			              </div>
			              <!-- /.box-body -->
			              <div class="box-footer">
			                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-arrow-right"></i> Lanjutkan</button>
			              </div>
			              <!-- /.box-footer -->
			            </form>
		              
		            </div>
		            <!-- /.box-body -->
		          </div>
		          
		        </div>
		        
		      </div>

          </div>
          <!-- /.box-body -->
        </div>


      </section>

    </div>

  </div>

 @endsection