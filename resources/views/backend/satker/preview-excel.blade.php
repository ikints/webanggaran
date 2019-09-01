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
        {{-- notifikasi sukses --}}
        @if ($sukses = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $sukses }}</strong>
        </div>
        @endif
        <div class="box">
          <div class="box-header">
            <a href="#" id="import" class="btn btn-flat btn-success btn-sm pull-right"> <i class="fa fa-cloud-upload"></i> Import</a>
            <a href="{{ URL('cms/satker/tahun-anggaran') }}" class="btn btn-flat btn-success btn-sm pull-right"> <i class="fa fa-plus"></i> Tambah Anggaran</a>

            
          </div>
        </div>

        <table id="tablelist" class="table table-bordered table-striped table-hover">

        <!-- Program -->
        <thead>
        <tr>
          <th class="text-center" colspan="4">
            Program
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>Program</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        </thead>
        <tbody>
        @foreach($program->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Kegiatan
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>Kegiatan</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($kegiatan->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Output
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>Output</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($output->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Output
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>Sub Output</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($soutput->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Komponen
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>Komponen</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($komponen->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Komponen
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>Sub Komponen</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($skomponen->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Akun
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>Akun</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($akun->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Sub Komponen
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>SSK</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($ssk->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Sub Komponen I
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>SSK I</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($sski->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Sub Komponen II
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>SSK II</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($sskii->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Sub Komponen III
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>SSK III</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($sskiii->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Sub Komponen IV
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>SSK IV</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($sskiv->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Sub Sub Komponen V
          </th>
        </tr>
        <tr>
          <th>Kode</th>
          <th>SSK V</th>
          <th>Volume</th>
          <th>Jumlah</th>
        </tr>
        @foreach($sskv->results as $rows)
          <tr>
            <td>{{ $rows->kode }}</td>
            <td>{{ $rows->nama }}</td>
            <td>{{ $rows->v }}</td>
            <td>{{ $rows->j }}</td> 
          </tr>
        @endforeach
        <tr>
          <th class="text-center" colspan="4">
            Kode
          </th>
        </tr>
        <tr>
          <th colspan="4">Struktur Kode</th>
        </tr>
        @foreach($kode->results as $rows)
          <tr>
            <td colspan="4">{{ $rows->kode }}</td> 
          </tr>
        @endforeach
        </tbody>
        </table>

      </section>

  </div>

@endsection

@section('extra-js')
<!-- DataTables -->
<script src="{{ URL('public/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL('public/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL('public/datatables.net/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL('public/datatables.net/js/buttons.flash.min.js') }}"></script>
<script src="{{ URL('public/datatables.net/js/jszip.min.js') }}"></script>
<script src="{{ URL('public/datatables.net/js/pdfmake.min.js') }}"></script>
<script src="{{ URL('public/datatables.net/js/vfs_fonts.js') }}"></script>
<script src="{{ URL('public/datatables.net/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL('public/datatables.net/js/buttons.print.min.js') }}"></script>
<!-- page script -->
<script>
  $(document).ready(function(){

    $('#import').on('click', function(e){
      alert('import');
    });

  })
</script>
@endsection