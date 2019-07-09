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
              <h4 class="box-title report-title">Laporan Pelaksanaan Kerkembangan Kegiatan Prioritas</h4><br>
              <h3 class="box-title report-title">Sampai dengan bulan : Desember 2019</h3><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table id="tablelist" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th rowspan="2">KODE</th>
                    <th rowspan="2">URAIAN</th>
                    <th rowspan="2">PAGU</th>
                    <th rowspan="2">NILAI KONTRAK</th>
                    <th colspan="2" class="text-center">PEMBAYARAN</th>
                    <th rowspan="2">JUMLAH</th>
                    <th rowspan="2">SISA</th>
                    <th rowspan="2">%</th>
                    <th rowspan="2">KETERANGAN</th>
                  </tr>
                  <tr>
                    <th class="text-center">UANG MUKA</th>
                    <th class="text-center">REALISASI KONTRAK</th>
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
                    <td>7</td>
                    <td>8=4-7</td>
                    <td>9=7-4</td>     
                    <td>10</td>           
                  </tr>
                <tr>
                  <td>Q100</td>
                  <td>DKI Jakarta</td>
                  <td>0</td>
                  <td>146.768</td>
                  <td>0</td>
                  <td>146.768</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
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
                  <td></td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
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
          "paging": false,
          "searching": false,
          "ordering": false,
          "bLengthChange": false,
          dom: 'lBfrtip',
                buttons: [
                    {
                      text: '<i class="fa fa-filter"></i> Buat Laporan Baru',
                      className: 'btn btn-success',
                      action: function ( e, dt, node, config ) {
                          window.location = APP_URL + '/cms/kemhan/uo/form-filter-laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas';
                      }
                    },
                    {   
                        text: '<i class="fa fa-file-excel-o"></i> Excel',
                        extend: 'excelHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: 'Laporan Pelaksanaan Kerkembangan Kegiatan Prioritas \n Sampai dengan bulan : Desember 2019 \n {{Session::get('status_user')}}',
                        title:'',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        customize: function (xlsx) {
                          console.log(xlsx);
                          var sheet = xlsx.xl.worksheets['sheet1.xml'];
                          var downrows = 5;
                          var clRow = $('row', sheet);
                          //style
                          

                          var mergeCells = $('mergeCells', sheet);
 
                          mergeCells[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A1:I1'
                            }
                          } ) );

                          mergeCells[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A2:I2'
                            }
                          } ) );

                          mergeCells[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A3:I3'
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
                          var r1 = AddrowHead(1, [{ k: 'A', v: 'Laporan Pelaksanaan Kerkembangan Kegiatan Prioritas' }]);
                          var r2 = AddrowHead(2, [{ k: 'A', v: 'Sampai dengan bulan : Desember 2019' }]);
                          var r3 = AddrowHead(3, [{ k: 'A', v: '{{Session::get('status_user')}}' }]);
                           
                          sheet.childNodes[0].childNodes[1].innerHTML = r1+  r2+ r3+ sheet.childNodes[0].childNodes[1].innerHTML;

                      }
                    },
                    { 
                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                        extend: 'pdfHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: 'Laporan Pelaksanaan Kerkembangan Kegiatan Prioritas {{Session::get('status_user')}} Sampai dengan bulan : Desember 2019',
                        title:'Laporan Pelaksanaan Kerkembangan Kegiatan Prioritas' + '\n' + 'Sampai dengan bulan : Desember 2019' + '\n' + ' {{Session::get('status_user')}} ',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        pageMargins: [ 150, 150, 150, 150 ],
                        margin: [ 150, 150, 150, 150 ],
                        messageTop : '',

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