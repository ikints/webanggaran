@extends('layout.backend')

@section('content')
<!-- Full Width Column -->
<div class="content-wrapper">
  <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Penyerapan Anggaran</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="chart-responsive">
                        <div id="PenyerapanAnggaran" style="height: 190px"></div>
                      </div>
                      <!-- ./chart-responsive -->
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
              <!-- /.box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <div class="row">
                <div class="col-md-12 bg-green padding-20">
                  <div class="box-header with-border">
                      <h3 class="box-title text-white">Total Anggaran</h3>
                </div>
                  <div class="box-body">
                      Rp. 107,7 Trilliun
                </div>
                </div>
                <div class="col-md-12 bg-blue padding-20 margin-top-10">
                  <div class="box-header with-border">
                      <h3 class="box-title text-white">Penyerapan Anggaran</h3>
                </div>
                  <div class="box-body">
                      Rp. 48,5 Trilliun
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <div class="row">
                <div class="col-md-12 bg-yellow padding-20">
                  <div class="box-header with-border">
                      <h3 class="box-title text-white">Total Penerimaan Dana Hibah</h3>
                </div>
                  <div class="box-body">
                      Rp. 15,7 Trilliun
                </div>
                </div>
                <div class="col-md-12 bg-aqua padding-20 margin-top-10">
                  <div class="box-header with-border">
                      <h3 class="box-title text-white">Total Pendapatan Negara</h3>
                </div>
                  <div class="box-body">
                      Rp. 10,5 Trilliun
                </div>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Anggaran Per-Jenis</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="chart-responsive">
                        <div id="PenyerapanAnggaranPerJenis" style="height: 190px"></div>
                      </div>
                      <!-- ./chart-responsive -->
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
              <!-- /.box -->
            </div>
          </div>
        </div>
      </div>

        

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 padding-20">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Penyerapan Anggaran Persatuan Kerja</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart-responsive">
                    <div id="PenyerapanAnggaranSatuanKerja" style="height: 190px"></div>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Penyerapan Anggaran Perbulan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart-responsive">
                    <div id="PenyerapanAnggaranPerbulan" style="height: 190px"></div>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">10 Sataun Kerja Dengan Anggaran Terbesar</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="chart-responsive">
                    <div id="10SatuanKerjaAnggaranTerbesar" style="height: 190px"></div>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Satuan Kerja Belum Menyerahkan Laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ol>
                  <li>Satuan Kerja I</li>
                  <li>Satuan Kerja II</li>
                  <li>Satuan Kerja III</li>
                  <li>Satuan Kerja IV</li>
                  <li>Satuan Kerja V</li>
                  <li>Satuan Kerja VI</li>
                  <li>Satuan Kerja VII</li>
                  <li>Satuan Kerja VIII</li>
                  <li>Satuan Kerja IX</li>
              </ol>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Penyerapan Anggaran 5 Tahun Terakhir</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <div class="col-md-12">
                    <div class="chart-responsive">
                      <div id="PenyerapanAnggaran5TahunTerakhir" style="height: 210px"></div>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>

  </section>
</div>
@endsection


@section('extra-js')
<script src="{{ URL('public/highcharts/highcharts.js') }}"></script>
<script src="{{ URL('public/highcharts/highcharts-3d.js') }}"></script>
<script type="text/javascript">
Highcharts.chart('PenyerapanAnggaran', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                distance: -30
            },
            allowPointSelect: true,
            cursor: 'pointer',
            showInLegend: false
        }
    },
    credits: {
      enabled: false
    },
    colors: ['#d38406', '#0073b7'],
    series: [{
        name: 'Anggaran',
        colorByPoint: true,
        data: [{
            name: 'Total Anggaran',
            y: 107.7,
            sliced: true,
            selected: true
        }, {
            name: 'Penyerapan Anggaran',
            y: 48.5
        }]
    }]
});

Highcharts.chart('PenyerapanAnggaranPerJenis', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                distance: -30
            },
            allowPointSelect: true,
            cursor: 'pointer',
            showInLegend: false
        }
    },
    credits: {
      enabled: false
    },
    colors: ['#d38406', '#0073b7', '#00c0ef'],
    series: [{
        name: 'Jenis',
        colorByPoint: true,
        data: [{
            name: 'Barang dan Jasa',
            y: 100,
            sliced: true,
            selected: true
        }, {
            name: 'Pembayaran Gaji',
            y: 90
        },{
            name: 'Kegiatan Prioritas',
            y: 80
        }]
    }]
});

Highcharts.chart('PenyerapanAnggaranSatuanKerja', {
    chart: {
        type: 'bar'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Satuan Kerja I', 'Satuan Kerja II'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        },column: {
          colorByPoint: true
      }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
      showInLegend: false,
        name: 'Year 2019',
        data: [107,90]
    }]
});

Highcharts.chart('PenyerapanAnggaranPerbulan', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Nominal Anggaran'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Satuan Kerja I',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, {
        name: 'Satuan Kerja II',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});

Highcharts.chart('PenyerapanAnggaran5TahunTerakhir', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            '2015',
            '2016',
            '2017',
            '2018',
            '2019',
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah (Rp)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },    
    credits: {
        enabled: false
    },
    series: [{
      showInLegend: false,
        name: '2019',
        data: [49.9, 71.5, 106.4, 129.2, 144.0]

    }]
});

Highcharts.chart('10SatuanKerjaAnggaranTerbesar', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                distance: -30
            },
            allowPointSelect: true,
            cursor: 'pointer',
            showInLegend: false
        }
    },
    credits: {
      enabled: false
    },
    colors: ['#d38406', '#0073b7', '#00a65a', '#ba2727', '#61115b', '#0aad07', '#e70099', '#e73a0c', '#98iu87', '#839715'],
    series: [{
        name: 'Anggaran',
        colorByPoint: true,
        data: [{
            name: 'Satuan Kerja I',
            y: 107,
            sliced: true,
            selected: true
        }, {
            name: 'Satuan Kerja II',
            y: 100.9
        },{
            name: 'Satuan Kerja III',
            y: 89.5
        },{
            name: 'Satuan Kerja IV',
            y: 59.1
        },{
            name: 'Satuan Kerja V',
            y: 78.3
        },{
            name: 'Satuan Kerja VI',
            y: 45
        },{
            name: 'Satuan Kerja VII',
            y: 140
        },{
            name: 'Satuan Kerja VIII',
            y: 210
        },{
            name: 'Satuan Kerja IX',
            y: 80
        },{
            name: 'Satuan Kerja X',
            y: 68
        },]
    }]
});
</script>
@endsection