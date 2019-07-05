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
            <div class="box-header padding-bottom-10 text-center">
              <h4 class="box-title report-title">Laporan Anggaran Perbatasan</h4><br>
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
                            <td style="padding: 0px;">Unit Organisasi</td>
                            <td style="padding: 0px;">: 22 - {{Session::get('status_user')}}</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Kotama</td>
                            <td style="padding: 0px;">: 08 - Kodam III/SILIWANGI</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Satuan Kerja</td>
                            <td style="padding: 0px;">: ZIDAM III/SLW</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Alokasi</td>
                            <td style="padding: 0px;">: Rp. 28.909.920.000</td>
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
                    <th>REALISASI</th>
                    <th>SISA</th>
                    <th>%</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>                
                  </tr>
                  <tr>
                  <td>511145</td>
                  <td>Beban Tunj. Penghidupan Luar Negeri untuk Home Staff PNS (Staff di LN)</td>
                  <td>1384000000</td>
                  <td>230666000</td>
                  <td>1153334000</td>
                  <td>16.67</td>
                </tr>
                <tr>
                  <td>511161</td>
                  <td>Beban Gaji Pokok PNS TNI/Polri</td>
                  <td>112587901000</td>
                  <td>26881499520</td>
                  <td>85706401480</td>
                  <td>23.88</td>
                </tr>
                <tr>
                  <td>511169</td>
                  <td>Beban Pembulatan Gaji PNS TNI/Polri</td>
                  <td>37210000</td>
                  <td>406167</td>
                  <td>36803833</td>
                  <td>1.09</td>
                </tr>
                <tr>
                  <td>511171</td>
                  <td>Beban Tunj. Suami/Istri PNS TNI/Polri</td>
                  <td>9934233000</td>
                  <td>1998985686</td>
                  <td>7935247314</td>
                  <td>20.12</td>
                </tr>
                <tr>
                  <td>511172</td>
                  <td>Beban Tunj. Anak PNS TNI/Polri</td>
                  <td>3065391000</td>
                  <td>595202787</td>
                  <td>2470188213</td>
                  <td>19.42</td>
                </tr>
                <tr>
                  <td>511173</td>
                  <td>Beban Tunj. Struktural PNS TNI/Polri</td>
                  <td>2825802000</td>
                  <td>544250000</td>
                  <td>2281552000</td>
                  <td>19.26</td>
                </tr>
                <tr>
                  <td>511174</td>
                  <td>Beban Tunj. Fungsional PNS TNI/Polri</td>
                  <td>2470395000</td>
                  <td>581300000</td>
                  <td>1889095000</td>
                  <td>23.53</td>
                </tr>
                <tr>
                  <td>511175</td>
                  <td>Beban Tunj. PPh PNS TNI/Polri</td>
                  <td>1174575000</td>
                  <td>14406893</td>
                  <td>1160168107</td>
                  <td>1.23</td>
                </tr>
                <tr>
                  <td>511176</td>
                  <td>Beban Tunj. Beras PNS TNI/Polri</td>
                  <td>7850515000</td>
                  <td>1658591760</td>
                  <td>6191923240</td>
                  <td>21.13</td>
                </tr>
                <tr>
                  <td>511179</td>
                  <td>Beban Uang Makan PNS TNI/Polri</td>
                  <td>27215565000</td>
                  <td>4869401600</td>
                  <td>22346163400</td>
                  <td>17.89</td>
                </tr>
                <tr>
                  <td>511191</td>
                  <td>Beban Tunjangan Medis PNS TNI/POLRI</td>
                  <td>156782000</td>
                  <td>29850000</td>
                  <td>126932000</td>
                  <td>19.04</td>
                </tr>
                <tr>
                  <td>511193</td>
                  <td>Beban Tunjangan Umum PNS TNI/Polri</td>
                  <td>5964794000</td>
                  <td>1126455000</td>
                  <td>4838339000</td>
                  <td>18.89</td>
                </tr>
                <tr>
                  <td>511194</td>
                  <td>Beban Tunj. Kompensasi Kerja Bidang Persandian PNS TNI/Polri</td>
                  <td>97500000</td>
                  <td>16200000</td>
                  <td>81300000</td>
                  <td>16.62</td>
                </tr>
                <tr>
                  <td>511197</td>
                  <td>Belanja Tunjangan Profesi Dosen/Kehormatan Guru Besar PNS TNI/Polri</td>
                  <td>95230000</td>
                  <td>0</td>
                  <td>95230000</td>
                  <td>0.00</td>
                </tr>
                <tr>
                  <td>511211</td>
                  <td>Beban Gaji Pokok TNI/POLRI</td>
                  <td>92719894000</td>
                  <td>25096408480</td>
                  <td>67623485520</td>
                  <td>27.07</td>
                </tr>
                <tr>
                  <td>511219</td>
                  <td>Beban Pembulatan Gaji TNI/POLRI</td>
                  <td>2745000</td>
                  <td>309473</td>
                  <td>2435527</td>
                  <td>11.27</td>
                </tr>
                <tr>
                  <td>511221</td>
                  <td>Beban Tunj. Suami/Istri TNI/POLRI</td>
                  <td>9016257000</td>
                  <td>2237100800</td>
                  <td>6779156200</td>
                  <td>24.81</td>
                </tr>
                <tr>
                  <td>511222</td>
                  <td>Beban Tunj. Anak TNI/POLRI</td>
                  <td>3135538000</td>
                  <td>713152546</td>
                  <td>2422385454</td>
                  <td>22.74</td>
                </tr>
                <tr>
                  <td>511223</td>
                  <td>Beban Tunj. Struktural TNI/POLRI</td>
                  <td>13764272000</td>
                  <td>3737985000</td>
                  <td>10026287000</td>
                  <td>27.16</td>
                </tr>
                <tr>
                  <td>511224</td>
                  <td>Beban Tunj. Fungsional TNI/POLRI</td>
                  <td>2588906000</td>
                  <td>419910000</td>
                  <td>2168996000</td>
                  <td>16.22</td>
                </tr>
                <tr>
                  <td>511225</td>
                  <td>Beban Tunj. PPh TNI/POLRI</td>
                  <td>1580528000</td>
                  <td>137582771</td>
                  <td>1442945229</td>
                  <td>8.70</td>
                </tr>
                <tr>
                  <td>511226</td>
                  <td>Beban Tunj. Beras TNI/POLRI</td>
                  <td>7243371000</td>
                  <td>1944081468</td>
                  <td>5299289532</td>
                  <td>26.84</td>
                </tr>
                <tr>
                  <td>511228</td>
                  <td>Beban Tunj. Lauk pauk TNI/POLRI</td>
                  <td>42346101000</td>
                  <td>11514570000</td>
                  <td>30831531000</td>
                  <td>27.19</td>
                </tr>
                <tr>
                  <td>511232</td>
                  <td>Beban Tunj. Kowan/Polwan TNI TNI/POLRI</td>
                  <td>139795000</td>
                  <td>30600000</td>
                  <td>109195000</td>
                  <td>21.89</td>
                </tr>
                <tr>
                  <td>511235</td>
                  <td>Beban Tunj. Kompensasi Kerja Bidang Persandian TNI/POLRI</td>
                  <td>46800000</td>
                  <td>13200000</td>
                  <td>33600000</td>
                  <td>28.21</td>
                </tr>
                <tr>
                  <td>511244</td>
                  <td>Beban Tunjangan Umum TNI/Polri</td>
                  <td>1060675000</td>
                  <td>264945000</td>
                  <td>795730000</td>
                  <td>24.98</td>
                </tr>
                <tr>
                  <td>511245</td>
                  <td>Beban Santunan Cacat TNI</td>
                  <td>167193000</td>
                  <td>0</td>
                  <td>167193000</td>
                  <td>0.00</td>
                </tr>
                <tr>
                  <td>511247</td>
                  <td>Beban Tunjangan Dosen TNI</td>
                  <td>610000000</td>
                  <td>0</td>
                  <td>610000000</td>
                  <td>0.00</td>
                </tr>
                <tr>
                  <td>512211</td>
                  <td>Beban Uang Lembur</td>
                  <td>1277208000</td>
                  <td>88262400</td>
                  <td>1188945600</td>
                  <td>6.91</td>
                </tr>
                <tr>
                  <td>512411</td>
                  <td>Beban Pegawai (Tunjangan Khusus/Kegiatan/Kinerja)</td>
                  <td>200832970000</td>
                  <td>43128468566</td>
                  <td>157704501434</td>
                  <td>21.47</td>
                </tr>
                </tbody>
                <tfoot>
                  <tr>
                  <td>#</td>
                  <td>TOTAL</td>
                  <td>551392146000</td>
                  <td>127873791917</td>
                  <td>423518354083</td>
                  <td>23.19</td>
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
          "paging": false,
          "searching": false,
          "ordering": false,
          "bLengthChange": false,
          dom: 'lBfrtip',
                buttons: [

                    {   
                        text: '<i class="fa fa-file-excel-o"></i> Excel',
                        extend: 'excelHtml5',
                        footer: true,
                        filename: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI UNIT ORGANISASI {{Session::get('status_user')}} PERIODE 1 JANUARI S.D. 31 MARET 2019',
                        title:'',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        customize: function (xlsx) {
                          console.log(xlsx);
                          var sheet = xlsx.xl.worksheets['sheet1.xml'];
                          var downrows = 3;
                          var clRow = $('row', sheet);
                          //style
                          

                          var mergeCells = $('mergeCells', sheet);
 
                          mergeCells[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A1:E1'
                            }
                          } ) );

                          mergeCells.attr( 'count', mergeCells.attr( 'count' )+1 );
 
                          function _createNode( doc, nodeName, opts ) {
                            var tempNode = doc.createElement( nodeName );
           
                            if ( opts ) {
                              if ( opts.attr ) {
                                $(tempNode).attr( opts.attr );
                              }
           
                              if ( opts.children ) {
                                $.each( opts.children, function ( key, value ) {
                                  tempNode.appendChild( value );
                                } );
                              }
           
                              if ( opts.text !== null && opts.text !== undefined ) {
                                tempNode.appendChild( doc.createTextNode( opts.text ) );
                              }
                            }
           
                            return tempNode;
                          }
                          //update Row
                          clRow.each(function () {
                              var attr = $(this).attr('r');
                              var ind = parseInt(attr);
                              ind = ind + downrows;
                              $(this).attr("r",ind);
                          });
                   
                          // Update  row > c
                          $('row c ', sheet).each(function () {
                              var attr = $(this).attr('r');
                              var pre = attr.substring(0, 1);
                              var ind = parseInt(attr.substring(1, attr.length));
                              ind = ind + downrows;
                              $(this).attr("r", pre + ind);
                          });

                          function AddrowHead(index,data) {
                              msg='<row r="'+index+'">'
                              for(i=0;i<data.length;i++){
                                  var key=data[i].k;
                                  var value=data[i].v;
                                  msg += '<c t="inlineStr" r="' + key + index + '" s="51">';
                                  msg += '<is>';
                                  msg +=  '<t>'+value+'</t>';
                                  msg+=  '</is>';
                                  msg+='</c>';
                              }
                              msg += '</row>';
                              return msg;
                          }
                   
                          function Addrow(index,data) {
                              msg='<row r="'+index+'">'
                              for(i=0;i<data.length;i++){
                                  var key=data[i].k;
                                  var value=data[i].v;
                                  msg += '<c t="inlineStr" r="' + key + index + '" s="">';
                                  msg += '<is>';
                                  msg +=  '<t>'+value+'</t>';
                                  msg+=  '</is>';
                                  msg+='</c>';
                              }
                              msg += '</row>';
                              return msg;
                          }
                   
                          //insert
                          var r1 = AddrowHead(1, [{ k: 'A', v: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI' }]);
                          var r2 = Addrow(2, [{ k: 'A', v: 'A' }]);
                          var r3 = Addrow(3, [{ k: 'A', v: '' }, { k: 'B', v: '' }, { k: 'C', v: 'ColC' }]);
                           
                          sheet.childNodes[0].childNodes[1].innerHTML = r1+ r2+ r3+ sheet.childNodes[0].childNodes[1].innerHTML;

                      }
                    },
                    { 
                        text: 'PDF',
                        extend: 'pdfHtml5',
                        footer: true,
                        filename: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI UNIT ORGANISASI {{Session::get('status_user')}} PERIODE 1 JANUARI S.D. 31 MARET 2019',
                        title:'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI UNIT ORGANISASI' + '\n' + '{{Session::get('status_user')}}' + '\n' + ' PERIODE 1 JANUARI S.D. 31 MARET 2019',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        pageMargins: [ 150, 150, 150, 150 ],
                        margin: [ 150, 150, 150, 150 ],
                        messageTop : 'aaa',
                        /*customize: function (doc) {
                          doc['header']=(function() {
                          return {
                            columns: [
                              {
                                alignment: 'center',
                                fontSize: 12,
                                text: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI'
                              
                              }
                            ],
                            margin: 20
                          }
                        });
                        }*/

                        customize: function ( doc ) {

                          var a = new Date();
                          var year = a.getFullYear();

                          //footer
                           var cols = [];
                           cols[0] = {text: 'Kementerian Pertahanan', alignment: 'left', margin:[20] };
                           cols[1] = {text: year, alignment: 'right', margin:[0,0,20] };
                           var objFooter = {};
                           objFooter['columns'] = cols;
                           doc['footer']=objFooter;

                          //header
                          /*doc['header']=(function() {
                            return {
                              columns: [
                                {
                                  alignment: 'center',
                                  fontSize: 12,
                                  text: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI'
                                
                                }
                              ],
                              margin: 20
                            }
                          });*/
                          
                          //content header
                          /*doc.content.splice(0, 0,
                            {
                                margin: [0, 0, 0, 5],
                                alignment: 'right',
                                text : 'Abcd Right'
                            }
                           );

                           doc.content.splice(0, 0,
                            {
                                margin: [0, 0, 0, 0],
                                alignment: 'left',
                                text : 'Abcd Left'
                            }
                           );*/

                          doc.styles.title = {
                            color: 'black',
                            fontSize: '16',
                            alignment: 'center'
                          }

                        }
                    }

                    ]
        }

      );
  })
</script>
@endsection