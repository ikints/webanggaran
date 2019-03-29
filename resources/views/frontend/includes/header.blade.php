<div class="top-head">
    <div class="container">
      <div class="row">
        <div class="col-md-7 pull-left">
          <div class="row">
            <div class="col-md-2 text-left nopadding">
              <a href="#" title="Kementerian Pertahanan"><img class="img-responsive logo" src="{{ URL('public/images/') }}/logo.png"/>
          </a>
            </div>
            <div class="col-md-10 text-left user-padding">
              <span class="a-mon">Aplikasi Monitoring Pelaksanaan Anggaran</span><br>
              <span class="k-per">Kementerian Pertahanan Republik Indonesia</span>
            </div>
          </div>
        </div>
        <div class="col-md-5 pull-right user-padding">
          <div class="row">
            <div class="col-md-10 text-right nopadding">
              <span>Kementerian Pertahanan <br>User : User 1 </span>
            </div>
            <div class="col-md-2 text-left user"><i class="fa fa-user"></i></div>
          </div>
        </div>
      </div>
    </div>
</div>

<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ URL('dashboard') }}" class="navbar-brand">Dashboard</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL('anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('perubahan-anggaran') }}">Perubahan Anggaran</a></li>
            <li><a href="{{ URL('realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('laporan') }}">Pelaksanaan Anggaran Belanja Modal</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('/') }}">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
</header>