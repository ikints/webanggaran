@extends('layout.frontend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Sumber Anggaran Tahun 2019</h3>
          </div>
          <div class="box-header">
          	<p>
            	Import Sumber Anggaran
            </p>
          </div>
          <div class="box-body">
          	<div class="row">
		        <div class="col-md-5 col-md-offset-4">
		        	
		            <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

		            <!-- /.box --><!-- form start -->
			            <form class="form-horizontal" method="get" action="dashboard">
			              <div class="box-body">
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">File Excel</label>

			                  <div class="col-sm-3">
			                    <input type="file" class="form-control" id="inputEmail3">
			                  </div>
			                </div>
			              </div>
			              <!-- /.box-body -->
			              <div class="box-footer"><button type="submit" class="btn btn-info pull-right">Lanjutkan <i class="fa fa-arrow-right"></i></button> 
			              	<button type="submit" class="btn btn-info pull-left"><i class="fa fa-arrow-left"></i> Kembali</button>
			                
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