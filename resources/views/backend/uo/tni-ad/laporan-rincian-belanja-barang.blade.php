@extends('layout.backend')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL('public/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL('public/datatables.net/css/jquery.dataTables.min.css') }}">
@endsection

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
            <div class="box-header padding-bottom-10 text-center">
              <h4 class="box-title report-title">LAPORAN PELAKSANAAN ANGGARAN BELANJA BARANG</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">PERIODE 1 JANUARI S.D. 31 MARET 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-7">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td>Unit Organisasi</td><td>: 22 - TNI AD</td>
                          </tr>
                          <tr>
                            <td>Kotama</td><td>: 08 - Kodam III/SILIWANGI</td>
                          </tr>
                          <tr>
                            <td>Satuan Kerja</td><td>: ZIDAM III/SLW</td>
                          </tr>
                          <tr>
                            <td>Alokasi</td><td>: Rp. 28.909.920.000</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  
                </div>

                </div>


                <table id="tablelist" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>KODE</th>
                    <th class="text-center">NAMA AKUN</th>
                    <th>ALOKASI DIPA</th>
                    <th>REALISASI SPAN</th>
                    <th>SISA</th>
                    <th>%</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>              
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>521111</td>
                    <td>Belanja Keperluan Perkantoran</td>
                    <td>133363276000</td>
                    <td>27181995391</td>
                    <td>106181280609</td>
                    <td>20.38</td>
                  </tr>
                  <tr>
                    <td>521112</td>
                    <td>Belanja pengadaan bahan makanan</td>
                    <td>427440360000</td>
                    <td>54879906222</td>
                    <td>372560453778</td>
                    <td>12.84</td>
                  </tr>
                  <tr>
                    <td>521113</td>
                    <td>Belanja Penambah Daya Tahan Tubuh</td>
                    <td>1335398000</td>
                    <td>391365580</td>
                    <td>944032420</td>
                    <td>29.31</td>
                  </tr>
                  <tr>
                    <td>521114</td>
                    <td>Belanja pengiriman surat dinas pos pusat</td>
                    <td>9520812000</td>
                    <td>895495460</td>
                    <td>8625316540</td>
                    <td>9.41</td>
                  </tr>
                  <tr>
                    <td>521115</td>
                    <td>Honor Operasional Satuan Kerja</td>
                    <td>604792044000</td>
                    <td>221855648848</td>
                    <td>382936395152</td>
                    <td>36.68</td>
                  </tr>
                  <tr>
                    <td>521119</td>
                    <td>Belanja Barang Operasional Lainnya</td>
                    <td>2811136863000</td>
                    <td>386811276075</td>
                    <td>2424325586925</td>
                    <td>13.76</td>
                  </tr>
                  <tr>
                    <td>521211</td>
                    <td>Belanja Bahan</td>
                    <td>713450109000</td>
                    <td>97648306742</td>
                    <td>615801802258</td>
                    <td>13.69</td>
                  </tr>
                  <tr>
                    <td>521213</td>
                    <td>Honor Output Kegiatan</td>
                    <td>331794253000</td>
                    <td>29072126559</td>
                    <td>302722126441</td>
                    <td>8.76</td>
                  </tr>
                  <tr>
                    <td>521219</td>
                    <td>Belanja Barang Non Operasional Lainnya</td>
                    <td>477345631000</td>
                    <td>26858345525</td>
                    <td>450487285475</td>
                    <td>5.63</td>
                  </tr>
                  <tr>
                    <td>521811</td>
                    <td>Belanja Barang Persediaan Barang Konsumsi</td>
                    <td>459278263000</td>
                    <td>119661853486</td>
                    <td>339616409514</td>
                    <td>26.05</td>
                  </tr>
                  <tr>
                    <td>521812</td>
                    <td>Belanja Barang Persediaan Amunisi</td>
                    <td>511838330000</td>
                    <td>0</td>
                    <td>511838330000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>521821</td>
                    <td>Belanja Barang Persediaan bahan baku</td>
                    <td>9250657000</td>
                    <td>198515000</td>
                    <td>9052142000</td>
                    <td>2.15</td>
                  </tr>
                  <tr>
                    <td>521832</td>
                    <td>Belanja Barang Persediaan Lainnya</td>
                    <td>968217798000</td>
                    <td>0</td>
                    <td>968217798000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>522111</td>
                    <td>Belanja Langganan Listrik</td>
                    <td>331200482000</td>
                    <td>53939593322</td>
                    <td>277260888678</td>
                    <td>16.29</td>
                  </tr>
                  <tr>
                    <td>522112</td>
                    <td>Belanja Langganan Telepon</td>
                    <td>105618806000</td>
                    <td>442882552</td>
                    <td>105175923448</td>
                    <td>0.42</td>
                  </tr>
                  <tr>
                    <td>522113</td>
                    <td>Belanja Langganan Air</td>
                    <td>195572953000</td>
                    <td>58128386455</td>
                    <td>137444566545</td>
                    <td>29.72</td>
                  </tr>
                  <tr>
                    <td>522119</td>
                    <td>Belanja Langganan Daya dan Jasa Lainnya</td>
                    <td>892473000</td>
                    <td>651097252</td>
                    <td>241375748</td>
                    <td>72.95</td>
                  </tr>
                  <tr>
                    <td>522121</td>
                    <td>Belanja Jasa Pos dan Giro</td>
                    <td>10780000</td>
                    <td>318000</td>
                    <td>10462000</td>
                    <td>2.95</td>
                  </tr>
                  <tr>
                    <td>522131</td>
                    <td>Belanja Jasa Konsultan</td>
                    <td>357000000</td>
                    <td>66500000</td>
                    <td>290500000</td>
                    <td>18.63</td>
                  </tr>
                  <tr>
                    <td>522141</td>
                    <td>Belanja Sewa</td>
                    <td>3772000000</td>
                    <td>779492410</td>
                    <td>2992507590</td>
                    <td>20.67</td>
                  </tr>
                  <tr>
                    <td>522151</td>
                    <td>Belanja Jasa Profesi</td>
                    <td>7004539000</td>
                    <td>1547291500</td>
                    <td>5457247500</td>
                    <td>22.09</td>
                  </tr>
                  <tr>
                    <td>522191</td>
                    <td>Beban Jasa Lainnya</td>
                    <td>33167102000</td>
                    <td>8291072089</td>
                    <td>24876029911</td>
                    <td>25.00</td>
                  </tr>
                  <tr>
                    <td>523111</td>
                    <td>Beban Pemeliharaan Gedung dan Bangunan</td>
                    <td>80778721000</td>
                    <td>8348890044</td>
                    <td>72429830956</td>
                    <td>10.34</td>
                  </tr>
                  <tr>
                    <td>523112</td>
                    <td>Belanja Barang Persediaan Pemeliharaan Gedung dan Bangunan</td>
                    <td>4540508000</td>
                    <td>0</td>
                    <td>4540508000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523121</td>
                    <td>Beban Pemeliharaan Peralatan dan Mesin</td>
                    <td>461980540000</td>
                    <td>18759803303</td>
                    <td>443220736697</td>
                    <td>4.06</td>
                  </tr>
                  <tr>
                    <td>523122</td>
                    <td>Beban Bahan Bakar Minyak dan Pelumas (BMP) dan Pelumas Khusus Non Pertamina</td>
                    <td>1042035335000</td>
                    <td>282428499</td>
                    <td>1041752906501</td>
                    <td>0.03</td>
                  </tr>
                  <tr>
                    <td>523123</td>
                    <td>Belanja Barang Persediaan Pemeliharaan Peralatan dan Mesin</td>
                    <td>279795016000</td>
                    <td>14742274150</td>
                    <td>265052741850</td>
                    <td>5.27</td>
                  </tr>
                  <tr>
                    <td>523129</td>
                    <td>Beban Pemeliharaan Peralatan dan Mesin Lainnya</td>
                    <td>23864000</td>
                    <td>0</td>
                    <td>23864000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>523199</td>
                    <td>Beban Pemeliharaan Lainnya</td>
                    <td>810520000</td>
                    <td>82201350</td>
                    <td>728318650</td>
                    <td>10.14</td>
                  </tr>
                  <tr>
                    <td>524111</td>
                    <td>Beban Perjalanan Dinas Biasa</td>
                    <td>636554182000</td>
                    <td>61243451135</td>
                    <td>575310730865</td>
                    <td>9.62</td>
                  </tr>
                  <tr>
                    <td>524113</td>
                    <td>Beban Perjalanan Dinas Dalam Kota</td>
                    <td>15900000</td>
                    <td>0</td>
                    <td>15900000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>524114</td>
                    <td>Beban Perjalanan Dinas Paket Meeting Dalam Kota</td>
                    <td>222002000</td>
                    <td>14863600</td>
                    <td>207138400</td>
                    <td>6.70</td>
                  </tr>
                  <tr>
                    <td>524119</td>
                    <td>Beban Perjalanan Dinas Paket Meeting Luar Kota</td>
                    <td>150102000</td>
                    <td>71311040</td>
                    <td>78790960</td>
                    <td>47.51</td>
                  </tr>
                  <tr>
                    <td>524211</td>
                    <td>Beban Perjalanan Dinas Biasa - Luar Negeri</td>
                    <td>1877485000</td>
                    <td>0</td>
                    <td>1877485000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>524219</td>
                    <td>Beban Perjalanan Dinas Lainnya - Luar Negeri</td>
                    <td>4614728000</td>
                    <td>213218000</td>
                    <td>4401510000</td>
                    <td>4.62</td>
                  </tr>
                  <tr>
                    <td>525111</td>
                    <td>Beban Gaji dan Tunjangan</td>
                    <td>99566295000</td>
                    <td>2588339910</td>
                    <td>96977955090</td>
                    <td>2.60</td>
                  </tr>
                  <tr>
                    <td>525112</td>
                    <td>Beban Barang</td>
                    <td>93123817000</td>
                    <td>750956524</td>
                    <td>92372860476</td>
                    <td>0.81</td>
                  </tr>
                  <tr>
                    <td>525113</td>
                    <td>Beban Jasa</td>
                    <td>524115567000</td>
                    <td>12547085497</td>
                    <td>511568481503</td>
                    <td>2.39</td>
                  </tr>
                  <tr>
                    <td>525114</td>
                    <td>Beban Pemeliharaan</td>
                    <td>72773922000</td>
                    <td>0</td>
                    <td>72773922000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>525115</td>
                    <td>Beban Perjalanan</td>
                    <td>4768629000</td>
                    <td>33845436</td>
                    <td>4734783564</td>
                    <td>0.71</td>
                  </tr>
                  <tr>
                    <td>525119</td>
                    <td>Beban Penyediaan Barang dan Jasa BLU Lainnya</td>
                    <td>11512906000</td>
                    <td>241566000</td>
                    <td>11271340000</td>
                    <td>2.10</td>
                  </tr>
                  <tr>
                    <td>525121</td>
                    <td>Belanja Barang Persediaan Barang Konsumsi - BLU</td>
                    <td>142681112000</td>
                    <td>461776340</td>
                    <td>142219335660</td>
                    <td>0.32</td>
                  </tr>
                  <tr>
                    <td>525124</td>
                    <td>Belanja Barang Persediaan Pita Cukai, Materai dan Leges - BLU</td>
                    <td>571466000</td>
                    <td>0</td>
                    <td>571466000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>525125</td>
                    <td>Belanja Barang Persediaan untuk Dijual/Diserahkan kepada Masyarakat - BLU</td>
                    <td>360000000</td>
                    <td>0</td>
                    <td>360000000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>525129</td>
                    <td>Belanja Barang Persediaan Lainnya - BLU</td>
                    <td>282689553000</td>
                    <td>0</td>
                    <td>282689553000</td>
                    <td>0.00</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td>TOTALsss</td>
                    <td>11881922099000</td>
                    <td>1209683479296</td>
                    <td>10672238619704</td>
                    <td>10.18</td>
                  </tr>
                </tfoot>
              </table>
            </div>
        </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('extra-js')
<!-- DataTables -->
<script src="{{ URL('public/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL('public/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#tablelist').DataTable(

        {
          "searching": false,
          "bLengthChange": false,
          dom: 'Bfrtip',
          buttons: [
              'excel', 'pdf'
          ]
        }

      );
  })
</script>
@endsection