@extends('layout.backend')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL('public/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL('public/datatables.net/css/jquery.dataTables.min.css') }}">
@endsection

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">

        <div class="box">
            <div class="box-header padding-bottom-20 text-center">
              <h4 class="box-title">Realisasi Anggaran</h4><br>
              <h3 class="box-title">@switch(Session::get('level'))
                    @case(1)
                        {{Session::get('status_user')}}
                        @break
                    @case(2)
                        {{Session::get('status_user')}}
                        @break
                    @case(3)
                        {{Session::get('status_user')}}
                        @break
                    @case(4)
                        {{Session::get('status_user')}}
                        @break
                @endswitch</h3><br>
              <h3 class="box-title">Kementerian Pertahanan Republik Indonesia</h3><br>
              <h3 class="box-title">Tahun 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form">
                          <div class="box-body">
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Program</label>
                                  <select class="form-control">
                                      <option>--Pilih Program--</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Kegiatan</label>
                                  <select class="form-control">
                                      <option>--Pilih Kegiatan--</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Output</label>
                                  <select class="form-control">
                                      <option>--Pilih Output--</option>
                                  </select>                        
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Sub Output</label>
                                  <select class="form-control">
                                      <option>--Pilih Sub Output--</option>
                                  </select> 
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Komponen</label>
                                  <select class="form-control">
                                      <option>--Pilih Komponen--</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Sub Komponen</label>
                                  <select class="form-control">
                                      <option>--Pilih Sub Komponen--</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Akun</label>
                                  <select class="form-control">
                                      <option>--Pilih Akun--</option>
                                  </select>                        
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="inputEmail3">Detail</label>
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Detail">
                                </div>
                              </div>
                              <div class="col-md-1 padding-top-25">
                                <button type="submit" class="btn btn-info btn-block"> Cari </button>
                              </div>
                              <div class="col-md-1 padding-top-25">
                                <button type="submit" class="btn btn-info btn-block"> Reset </button>
                              </div>
                            </div>
                            
                            
                            
                          </div>
                        </form>


                <div class="table-responsive text-nowrap">
                  <table class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th rowspan="2" class="text-center">PROGRAM/KEGIATAN/OUTPUT/SUBOUPUT<br>KOMPONEN/SUBKOMPONEN/AKUN/DETIL</th>
                        <th colspan="4" class="text-center">ANGGARAN</th>
                        <th colspan="4" class="text-center">ANGGARAN</th>
                        <th rowspan="2" class="text-center">PILIHAN</th>
                      </tr>
                      <tr>
                        <th class="text-center">VOLUME</th>
                        <th class="text-center">SATUAN</th>
                        <th class="text-center">HARGA SATUAN</th>
                        <th class="text-center">JUMLAH</th>
                        <th class="text-center">VOLUME</th>
                        <th class="text-center">SATUAN</th>
                        <th class="text-center">HARGA SATUAN</th>
                        <th class="text-center">JUMLAH</th>
                      </tr>
                      <tr>
                        <th>(1)</th>
                        <th>(2)</th>
                        <th>(3)</th>
                        <th>(4)</th>
                        <th>(5)</th>
                        <th>(6)</th>
                        <th>(7)</th>
                        <th>(8)</th>
                        <th>(9)</th>
                        <th>(10)</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>012.22.14 - Program Dukungan Kesiapan Matra Darat</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>70.041.220.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>70.041.220.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a> 
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;1444 - Penyelenggaraan Intelejen dan Pengamanan Matra Darat</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.933.789.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.933.789.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1444.001 - "Intelejen dan Pengamanan Matra Darat [Baseline]"</td>
                        <td>12.00</td>
                        <td>Laporan</td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td>12.00</td>
                        <td>Laporan</td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1444.001.001 - Intelejen dan Pengamanan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;003 - Dukungan Operasional Pertahanan dan Keamanan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>66.344.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>66.344.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B - Kegiatan Pengamanan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>16.000.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>16.000.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212111 - Belanja Barang Operasional Lainnya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>588.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>588.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/mabes-tni/uo/rincian-anggaran-detail') }}">Kegiatan Pengamanan</a></td>
                        <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                          <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212112 - Belanja Barang Operasional Lainnya</td>
                        <td>28.00</td>
                        <td></td>
                        <td></td>
                        <td>1.316.000</td>
                        <td>28.00</td>
                        <td></td>
                        <td></td>
                        <td>1.316.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/mabes-tni/uo/rincian-anggaran-detail') }}">P4GN</a></td>
                        <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                        <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;1451 - Pemeliharaan/Perawatan Non Alutsista</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.933.789.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.933.789.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1451.001 - Materil Non Alutsista yang Terpelihara [Baseline]</td>
                        <td>12.00</td>
                        <td>Laporan</td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td>12.00</td>
                        <td>Laporan</td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1451.001.004 - Pemeliharaan Alzi </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;003 - Dukungan Operasional Pertahanan dan Keamanan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>66.344.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>66.344.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A - Pemeliharaan Alzi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>16.000.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>16.000.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212111 - Belanja Barang Operasional Lainnya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>588.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>588.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/mabes-tni/uo/rincian-anggaran-detail') }}">Kegiatan Pengamanan</a></td>
                        <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                        <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212112 - Belanja Barang Operasional Lainnya</td>
                        <td>28.00</td>
                        <td></td>
                        <td></td>
                        <td>1.316.000</td>
                        <td>28.00</td>
                        <td></td>
                        <td></td>
                        <td>1.316.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <a href="{{ URL('cms/mabes-tni/uo/rincian-anggaran-detail') }}">P4GN</a></td>
                        <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                        <td>19.00</td>
                        <td>GIAT</td>
                        <td>15.000</td>
                        <td>16.000.000</td>
                        <td>
                          <a href="{{ URL('cms/mabes-tni/uo/penyerapan-realisasi-anggaran') }}">Penyerapan</a> | <a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran-detail') }}">Detil</a>
                        </td>
                      </tr>
                      
        
                    </tbody>
                  </table>
                </div>
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

      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection


@section('extra-js')
<!-- DataTables -->
<script src="{{ URL('public/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL('public/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#tablelist').DataTable(
      { 
          "paging": false,
          "searching": true,
          "ordering": false,
          "bLengthChange": false,

      }
    );
    //var initial
    $("#textnominal").hide();
    $("#labelnominal").show();

    $("#labelnominal").click(function(){
      $("#labelnominal").hide();
      $("#textnominal").show();
    });

    $('#textnominal').on('input', function() {
        alert('Nominal Changed');
        $("#textnominal").hide();
        $("#labelnominal").show();
    });

    var i;
    for (let i = 1; i <= 1000; i++) { 
      
      $("#textvolume_"+i).hide();
      $("#labelvolume_"+i).show();


      $('#labelvolume_' +i).click(function(){
        $("#labelvolume_"+i).hide();
        $("#textvolume_"+i).show();
      });

      $('#textvolume_'+i).change(function() {

        var tv = $('#textvolume_'+i).val();

        alert('Jumlah Volume Realisasi' +tv);
        
      });

      $("#textnominal_"+i).hide();
      $("#labelnominal_"+i).show();

      $('#labelnominal_' +i).click(function(){
        $("#labelnominal_"+i).hide();
        $("#textnominal_"+i).show();
      });

      $('#textnominal_'+i).change(function() {
        
        var tn = $('#textnominal_'+i).val();

        alert('Jumlah Nominal Realisasi' +tn);

      });

    }

  })
</script>
@endsection