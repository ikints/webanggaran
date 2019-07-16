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
            <div class="box-header padding-bottom-10 text-right with-border panel-heading">
              <a href="{{ URL('cms/tahun-anggaran-baru') }}" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Buat Anggaran Baru</a>
            </div>
            <div class="box-header padding-bottom-20 text-center">
              <h4 class="box-title">Rincian Anggaran</h4><br>
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
                <div class="table-responsive">
                  <table id="tablelist" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th rowspan="2" class="text-center">KODE</th>
                        <th rowspan="2" class="text-center">PROGRAM/KEGIATAN/OUTPUT/SUBOUPUT<br>KOMPONEN/SUBKOMPONEN/AKUN/DETIL</th>
                        <th colspan="2" class="text-center">ANGGARAN</th>
                        <th colspan="2" class="text-center">SISA</th>
                        <th colspan="2" class="text-center">REALISASI</th>
                      </tr>
                      <tr>
                        <th class="text-center">VOLUME</th>
                        <th class="text-center">JUMLAH</th>
                        <th class="text-center">VOLUME</th>
                        <th class="text-center">JUMLAH</th>
                        <th class="text-center">VOLUME</th>
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
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>012.01.07</td>
                        <td>Program Perencanaan Umum dan Penganggaran Pertahanan</td>
                        <td></td>
                        <td>70.041.220.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1359</td>
                        <td>Administrasi dan pelaksanaan anggaran</td>
                        <td></td>
                        <td>1.933.789.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;1359.001</td>
                        <td>Layanan Administrasi dan pelaksanaan anggaran</td>
                        <td>16.00</td>
                        <td>1.059.206.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;1359.001.001</td>
                        <td>Pembinaan Administrasi dan pelaksanaan anggaran</td>
                        <td></td>
                        <td>1.059.206.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;051</td>
                        <td>Evaluasi penggunaan anggaran terpusat air minum di lingkungan kemhan dan TNI TA.2018</td>
                        <td></td>
                        <td>66.344.000</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;521211</td>
                        <td>Belanja Bahan (KPPN.019 Jakarta II)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212111</td>
                        <td><a href="{{ URL('cms/rincian-anggaran-detail') }}">Snack Rapat Biasa D.K.I Jakarta (14ORG X2OK)</a></td>
                        <td>28.00</td>
                        <td class="progress-bar-custom progress-bar-green" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 20%">588.000</td>
                        <td>0</td>
                        <td>0</td>
                        <td><input type="text" name="realisasi" size="5" id="textvolume_1">
                          <span id="labelvolume_1">0</span>
                        </td>
                        <td><input type="text" name="realisasi" size="5" id="textnominal_1">
                          <span id="labelnominal_1">0</td>
                      </tr>
                      <tr id="anggaran-terlambat">
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212112</td>
                        <td><a href="{{ URL('cms/rincian-anggaran-detail') }}">Makan Rapat Biasa D.K.I Jakarta (14ORG X2OK)</a></td>
                        <td>28.00</td>
                        <td>1.316.000</td>
                        <td>0</td>
                        <td>0</td>
                        <td><input type="text" name="realisasi" size="5" id="textvolume_2">
                          <span id="labelvolume_2">0</span>
                        </td>
                        <td><input type="text" name="realisasi" size="5" id="textnominal_2">
                          <span id="labelnominal_2">0</span></td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5212113</td>
                        <td><a href="{{ URL('cms/rincian-anggaran-detail') }}">Reproduksi</a></td>
                        <td>1.00</td>
                        <td>846.000</td>
                        <td>0</td>
                        <td>0</td>
                        <td><input type="text" name="realisasi" size="5" id="textvolume_3">
                          <span id="labelvolume_3">0</span></td>
                        <td><input type="text" name="realisasi" size="5" id="textnominal_3">
                          <span id="labelnominal_3">0</td>
                      </tr>
        
                    </tbody>
                  </table>
                </div>
            </div>
          <!-- /.box-body -->
        </div>
          <!-- /.box-body -->
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