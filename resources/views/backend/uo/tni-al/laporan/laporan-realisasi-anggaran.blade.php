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
              <h4 class="box-title report-title">Laporan Realisasi Anggaran</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">UNTUK PERIODE YANG BERAKHIR 31 DESEMBER 2019</h3>
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
                            <td style="padding: 0px;">KEMENTERIAN NEGARA/LEMBAGA</td>
                            <td style="padding: 0px;">: 012 - {{Session::get('status_user')}}</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">ESELON</td>
                            <td style="padding: 0px;">: 01 - KEMENTERIAN PERTAHANAN</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <div class="col-md-5">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td style="padding: 0px;">Kode Lap</td>
                            <td style="padding: 0px;">: LRA.P.E1.2</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Tanggal</td>
                            <td style="padding: 0px;">: 11/02/19 11:30 PM</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Halaman</td>
                            <td style="padding: 0px;">: 2</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Prg ID</td>
                            <td style="padding: 0px;">: lap_09</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                  
                </div>

                </div>


                <table id="tablelist" class="table table-striped table-bordered table-hover">
                  <thead>
                  <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">URAIAN</th>
                    <th colspan="4" class="text-center">2018</th>
                    <th colspan="4" class="text-center">2017</th>
                  </tr>
                  <tr>
                    <th class="text-center">ANGGARAN</th>
                    <th class="text-center">REALISASI</th>
                    <th class="text-center">RELISASI DIATAS (BAWAH)</th>
                    <th class="text-center">%</th>
                    <th class="text-center">ANGGARAN</th>
                    <th class="text-center">REALISASI</th>
                    <th class="text-center">RELISASI DIATAS (BAWAH)</th>
                    <th class="text-center">%</th>
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
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>                
                  </tr>
                <tr>
                  <td>A</td>
                  <td>Pendapatan negara dan hibah</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td>Penerimaan perpajakan</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Penerimaan negara bukan pajak</td>
                  <td>0</td>
                  <td>111.522.292,172</td>
                  <td>(111.522.292,172)</td>
                  <td>0</td>
                  <td>0</td>
                  <td>99.480.944,700</td>
                  <td>(99.480.944,700)</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Penerimaan hibah</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr style="font-weight: bold;">
                  <td></td>
                  <td>Jumlah pendapatan dan hibah</td>
                  <td>0</td>
                  <td>111.522.292,172</td>
                  <td>(111.522.292,172)</td>
                  <td>0</td>
                  <td>0</td>
                  <td>99.480.944,700</td>
                  <td>(99.480.944,700)</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>A</td>
                  <td>Belanja</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Pegawai</td>
                  <td>663.713.021.000</td>
                  <td>618.801.579.836</td>
                  <td>14.911.451.168</td>
                  <td>98</td>
                  <td>699.702.640.000</td>
                  <td>541.261.357.804</td>
                  <td>128.441.282.196</td>
                  <td>81</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Barang</td>
                  <td>8.663.713.021.000</td>
                  <td>5.663.713.021.000</td>
                  <td>3.663.713.021.000</td>
                  <td>60</td>
                  <td>4.663.713.021.000</td>
                  <td>3.663.713.021.000</td>
                  <td>663.713.021.000</td>
                  <td>84</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Modal</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Pembayaran Kewajiban</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Utang</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Subsidi</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Hibah</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Bantuan Sosial</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Belanja Lain-lain</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Jumlah Belanja (BI + BII)</td>
                  <td>22.663.713.021.000</td>
                  <td>12.663.713.021.000</td>
                  <td>9.663.713.021.000</td>
                  <td>55</td>
                  <td>22.663.713.021.000</td>
                  <td>17.663.713.021.000</td>
                  <td>5.663.713.021.000</td>
                  <td>78</td>
                </tr>
                <tr>
                  <td>C</td>
                  <td>Pembiayaan</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>0</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                </tbody>
              </table>
            </div>
        </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
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
                        filename: 'Laporan Realisasi Anggaran {{Session::get('status_user')}} PERIODE 31 Desember 2019',
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
                          var r1 = AddrowHead(1, [{ k: 'A', v: 'Laporan Realisasi Anggaran' }]);
                          var r2 = Addrow(3, [{ k: 'A', v: 'KEMENTERIAN NEGARA/LEMBAGA : 012' }]);
                          var r3 = Addrow(4, [{ k: 'A', v: 'ESELON : 01 - KEMENTERIAN PERTAHANAN' }]);
                          var r4 = Addrow(4, [{ k: 'G', v: 'Kode Lap : LRA.P.E1.2' }]);
                          var r5 = Addrow(5, [{ k: 'G', v: 'Tanggal : 11/02/19 11:30 PM' }]);
                          var r6 = Addrow(6, [{ k: 'G', v: 'Halaman : 2' }]);
                          var r7 = Addrow(7, [{ k: 'G', v: 'Prg ID : lap_09' }]);
                           
                          sheet.childNodes[0].childNodes[1].innerHTML = r1+ r2+ r3+ r4+ r5+ r6+ r7+  sheet.childNodes[0].childNodes[1].innerHTML;

                      }
                    },
                    { 
                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                        extend: 'pdfHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: 'Laporan Realisasi Anggaran {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'Laporan Realisasi Anggaran' + '\n' + '{{Session::get('status_user')}}' + '\n' + ' PERIODE 31 Desember 2019',
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