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
            <div class="box-header padding-bottom-10 text-right with-border panel-heading"></div>
            <div class="box-header padding-bottom-10 text-center">
              <h4 class="box-title report-title">LAPORAN PELAKSANAAN ANGGARAN BELANJA MODAL</h4><br>
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
                            <td>Unit Organisasi</td><td>: 22 - {{Session::get('status_user')}}</td>
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
                    <td>531111</td>
                    <td>Belanja Modal Tanah</td>
                    <td>4730364000</td>
                    <td>0</td>
                    <td>4730364000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>532111</td>
                    <td>Belanja Modal Peralatan dan Mesin</td>
                    <td>17482144336000</td>
                    <td>22938149860</td>
                    <td>17459206186140</td>
                    <td>0.13</td>
                  </tr>
                  <tr>
                    <td>533111</td>
                    <td>Belanja Modal Gedung dan Bangunan</td>
                    <td>417128893000</td>
                    <td>14706158119</td>
                    <td>402422734881</td>
                    <td>3.53</td>
                  </tr>
                  <tr>
                    <td>533113</td>
                    <td>Belanja Modal Upah Tenaga Kerja dan Honor Pengelola Teknis Gedung dan Bangunan</td>
                    <td>578834000</td>
                    <td>0</td>
                    <td>578834000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>533115</td>
                    <td>Belanja Modal Perencanaan dan Pengawasan Gedung dan Bangunan</td>
                    <td>1711451000</td>
                    <td>0</td>
                    <td>1711451000</td>
                    <td>0.00</td>
                  </tr>
                  <tr>
                    <td>533117</td>
                    <td>Belanja Modal Pengosongan dan Pembongkaran Bangunan Lama, Gedung dan Bangunan</td>
                    <td>5872131000</td>
                    <td>289199750</td>
                    <td>5582931250</td>
                    <td>4.92</td>
                  </tr>
                  <tr>
                    <td>534111</td>
                    <td>Belanja Modal Jalan dan Jembatan</td>
                    <td>186000000000</td>
                    <td>1106607500</td>
                    <td>184893392500</td>
                    <td>0.59</td>
                  </tr>
                  <tr>
                    <td>536111</td>
                    <td>Belanja Modal Lainnya</td>
                    <td>69083677000</td>
                    <td>6235291434</td>
                    <td>62848385566</td>
                    <td>9.03</td>
                  </tr>
                  
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td>18167249686000</td>
                    <td>45275406663</td>
                    <td>18121974279337</td>
                    <td>0.25</td>
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

    var APP_URL = {!! json_encode(url('/')) !!};

    $('#tablelist').DataTable(

        {
          "searching": false,
          "bLengthChange": false,
          dom: 'Bfrtip',
          buttons: [
              {
                      text: '<i class="fa fa-filter"></i> Buat Laporan Baru',
                      className: 'btn btn-success',
                      action: function ( e, dt, node, config ) {
                          window.location = APP_URL + '/cms/kemhan/uo/form-filter-laporan-pelaksanaan-anggaran-belanja-modal';
                      }
                    },{   
                        text: '<i class="fa fa-file-excel-o"></i> Excel',
                        extend: 'excelHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: 'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        customize: function (xlsx) {
                          console.log(xlsx);
                          var sheet = xlsx.xl.worksheets['sheet1.xml'];
                          var downrows = 8;
                          var clRow = $('row', sheet);
                          //style
                          

                          var mergeCells = $('mergeCells', sheet);
 
                          mergeCells[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A1:G1'
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
                          var r1 = AddrowHead(1, [{ k: 'A', v: 'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja' }]);
                          var r2 = Addrow(3, [{ k: 'A', v: 'KEMENTERIAN NEGARA/LEMBAGA : 012' }]);
                          var r3 = Addrow(4, [{ k: 'A', v: 'ESELON : 01 - KEMENTERIAN PERTAHANAN' }]);
                          var r4 = Addrow(4, [{ k: 'G', v: 'Kode Lap : LRA.P.E1.2' }]);
                          var r5 = Addrow(5, [{ k: 'G', v: 'Tanggal : 11/02/19 11:30 PM' }]);
                          var r6 = Addrow(6, [{ k: 'G', v: 'Halaman : 2' }]);
                          var r7 = Addrow(7, [{ k: 'G', v: 'Prg ID : lap_09' }]);

                          //
                          var r8 = Addrow(8, [{ k: 'F', v: 'REALISASI BELANJA' }]);
                           
                          sheet.childNodes[0].childNodes[1].innerHTML = r1+ r2+ r3+ r4+ r5+ r6+ r7+ r8+  sheet.childNodes[0].childNodes[1].innerHTML;

                      }
                    },
                    { 
                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                        extend: 'pdfHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: 'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja' + '\n' + '{{Session::get('status_user')}}' + '\n' + ' PERIODE 31 Desember 2019',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        pageMargins: [ 150, 150, 150, 150 ],
                        margin: [ 150, 150, 150, 150 ],
                        messageTop : 'KEMENTERIAN NEGARA/LEMBAGA : 012 - {{Session::get('status_user')}} \n ESELON : 01 - KEMENTERIAN PERTAHANAN \n \n Kode Lap : LRA.P.E1.2 \n Tanggal : 11/02/19 11:30 PM \n Halaman : 2 \n Prg ID : lap_09',

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

      $("#tablelist_wrapper > .dt-buttons").appendTo("div.panel-heading");
  })
</script>
@endsection