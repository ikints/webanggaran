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
            	Proses Selesai
            </p>
          </div>
          <div class="box-body">
          	<div class="row">
		        <div class="col-md-5 col-md-offset-4">
		            <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded text-center">
		            <p>
		            	<h3 class="text-green">Selesai</h3>

		            	<p>
		            		Seluruh Tahapan Setting Awal Tahun Sudah Selesai.<br>
		            		Silahkan Lanjutkan Penggunaan Aplikasi<br><br>
		            		Semoga Tahun ini Sukses.
		            	</p>
		            
		            </p>	
		            <a href="{{ URL('cms/mabes-tni/uo/dashboard') }}" class="btn btn-success">Selesai</a>
		              
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