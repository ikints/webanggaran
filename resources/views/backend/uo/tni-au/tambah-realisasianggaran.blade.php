@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border text-center">
            <h1>Revisi Anggaran</h1>
          </div>
          <div class="box-body">
          	<a href="{{ URL('cms/anggaran') }}" class="btn btn-success btn-flat margin-top-50"><i class="fa fa-list"></i> Lihat Anggaran</a>
		    <!-- <a href="{{ URL('cms/realisasi-anggaran') }}" class="btn btn-success btn-flat margin-top-50"><i class="fa fa-list"></i> Lihat Pencairan</a> -->
          	<div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-10">
                      <!-- form start -->
                      <form class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Revisi Ke</label>

                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Revisi Ke">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Unit Organisasi</label>

                            <div class="col-sm-5">
                              <select class="form-control">
                                <option>--Pilih Unit Organisasi--</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Kotama</label>

                            <div class="col-sm-5">
                              <select class="form-control">
                                <option>--Pilih Kotama--</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Satuan Kerja</label>

                            <div class="col-sm-5">
                              <select class="form-control">
                                <option>--Pilih Satuan Kerja--</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">No. DIPA</label>

                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="No. DIPA">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Tanggal</label>

                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Tanggal">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Catatan</label>

                            <div class="col-sm-3">
                              <textarea class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">File DIPA</label>

                            <div class="col-sm-3">
                              <input type="file" class="form-control" id="inputEmail3">
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer btn-group">
                          <button type="submit" class="btn btn-info pull-left"><i class="fa fa-save"></i> Revisi</button>
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="submit" class="btn btn-warning pull-left"><i class="fa fa-close"></i> Batal</button>
                        </div>
                        <!-- /.box-footer -->
                      </form>
                    </div>
                    <!-- /.box -->
                  </div>
                  
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