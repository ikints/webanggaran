@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border text-center">
            <h1>Edit Anggaran</h1>
          </div>
          <div class="box-body">
          	<a href="{{ URL('cms/tni-au/uo/anggaran') }}" class="btn btn-success btn-flat margin-top-50"><i class="fa fa-list"></i> Lihat Anggaran</a>
		    <!-- <a href="{{ URL('cms/realisasi-anggaran') }}" class="btn btn-success btn-flat margin-top-50"><i class="fa fa-list"></i> Lihat Pencairan</a> -->
          	<div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-9">
                      <!-- form start -->
                      <form class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Program</label>
                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Program--</option>
                                <option selected="selected">012.22.14 - Program Dukungan Kesiapan Matra Darat</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Kegiatan</label>
                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Kegiatan--</option>
                                <option selected="selected">1444 - Penyelenggaraan Intelejen dan Pengamanan Matra Darat</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Output</label>
                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Output--</option>
                                <option selected="selected">1444.001 - "Intelejen dan Pengamanan Matra Darat [Baseline]"</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Sub Ootput</label>
                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Subputput--</option>
                                <option selected="selected">1444.001.001 - Intelejen dan Pengamanan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Komponen</label>
                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Komponen--</option>
                                <option selected="selected">003 - Dukungan Operasional Pertahanan dan Keamanan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Sub Komponen</label>
                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Sub Komponen--</option>
                                <option selected="selected">B - Kegiatan Pengamanan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Akun</label>
                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Akun--</option>
                                <option selected="selected">5212111 - Belanja Barang Operasional Lainnya</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Detil</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputEmail3" value="Kegiatan Pengamanan">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Volume</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputEmail3" value="1">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Satuan</label>

                            <div class="col-sm-6">
                              <select class="form-control">
                                <option>--Pilih Satuan--</option>
                                <option selected="selected">GIAT</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Harga Satuan</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputEmail3" value="16.000.000">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3">Jumlah</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="inputEmail3" value="16.000.000">
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer btn-toolbar">
                          <button type="submit" class="btn btn-info pull-left"><i class="fa fa-save"></i> Simpan</button>
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