@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Tahun Anggaran</h3>
          </div>
          <div class="box-header">
          	<p>
            	Kelola Tahun Anggaran, Inisiasi tahun anggaran baru, konfigurasi tahun anggaran berjalan dan pemilihan tahun anggaran.<br>Pemilihan Tahun Anggaran akan menentukan pengisian data pelaksanaan anggaran
            </p>
          </div>
          <div class="box-body">
          	<div class="row">
		        <div class="col-md-5 col-md-offset-4">
		        	<a href="{{ URL('cms/satker/tahun-anggaran-baru') }}" class="btn btn-xs btn-success margin-top-50"><i class="fa fa-plus"></i> Tahun Anggaran Baru</a>
		            <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

		            <table class="table table-responsive table-hover">
		            	<thead>
		            		<tr>
		            			<th>Tahun Anggaran</th>
		            			<th>Status</th>
		            			<th>Pilihan</th>
		            		</tr>
		            	</thead>
		            	<tbody>
		            		<tr>
		            			<td>2015</td>
		            			<td>Tutup Buku</td>
		            			<td>
		            				<a href="#" class="btn btn-success btn-xs">Info</a> <a href="#" class="btn btn-danger btn-xs">Hapus</a>
		            			</td>
		            		</tr>
		            		<tr>
		            			<td>2016</td>
		            			<td>Tutup Buku</td>
		            			<td><a href="#" class="btn btn-success btn-xs">Info</a> <a href="#" class="btn btn-danger btn-xs">Hapus</a></td>
		            		</tr>
		            		<tr>
		            			<td>2017</td>
		            			<td>Tutup Buku</td>
		            			<td><a href="#" class="btn btn-success btn-xs">Info</a> <a href="#" class="btn btn-danger btn-xs">Hapus</a></td>
		            		</tr>
		            		<tr>
		            			<td>2018</td>
		            			<td>Tutup Buku</td>
		            			<td><a href="#" class="btn btn-success btn-xs">Info</a> <a href="#" class="btn btn-danger btn-xs">Hapus</a></td>
		            		</tr>
		            		<tr>
		            			<td>2019</td>
		            			<td><a href="#">Aktif</a></td>
		            			<td><a href="#" class="btn btn-info btn-xs">Info</a> <a href="#" class="btn btn-success btn-xs">Konfigurasi</a> <a href="#" class="btn btn-danger btn-xs">Hapus</a></td>
		            		</tr>
		            	</tbody>
		            </table>
		              
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