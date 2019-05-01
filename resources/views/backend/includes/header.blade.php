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
              <span>Kementerian Pertahanan <br>User : 
                @switch(Session::get('level'))
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
              @endswitch

               </span>
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
          @switch(Session::get('level'))
                  @case(1)
                      <a href="{{ URL('cms/dashboard') }}" class="navbar-brand">Dashboard</a>
                      @break
                  @case(2)

                    @switch(Session::get('username'))
                      @case('kemhan_uo')
                          <a href="{{ URL('cms/kemhan/uo/dashboard') }}" class="navbar-brand">Dashboard</a>
                        @break
                      @case('mabes_tni_uo')
                          <a href="{{ URL('cms/mabes-tni/uo/dashboard') }}" class="navbar-brand">Dashboard</a>
                        @break
                      @case('tni_ad_uo')
                          <a href="{{ URL('cms/tni-ad/uo/dashboard') }}" class="navbar-brand">Dashboard</a>
                        @break
                      @case('tni_au_uo')
                          <a href="{{ URL('cms/tni-au/uo/dashboard') }}" class="navbar-brand">Dashboard</a>
                        @break
                      @case('tni_al_uo')
                          <a href="{{ URL('cms/tni-al/uo/dashboard') }}" class="navbar-brand">Dashboard</a>
                        @break
                    @endswitch

                      
                      @break
                  @case(3)
                      <a href="{{ URL('cms/kotama/dashboard') }}" class="navbar-brand">Dashboard</a>
                      @break
                  @case(4)
                      <a href="{{ URL('cms/satker/dashboard') }}" class="navbar-brand">Dashboard</a>
                      @break
              @endswitch
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- Menu Kemhan -->
            @if(Session::get('level') == 1)
            <li class="active"><a href="{{ URL('cms/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/revisi-anggaran') }}">Revisi Anggaran</a></li>
            <li><a href="{{ URL('cms/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
            @elseif (Session::get('level') == 2)
                
              @switch(Session::get('username'))
                  @case('kemhan_uo')
            <li class="active"><a href="{{ URL('cms/kemhan/uo/anggaran') }}">Anggaran Unit Organisasi</a></li>
            <li><a href="{{ URL('cms/kemhan/uo/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('mabes_tni_uo')
            <li class="active"><a href="{{ URL('cms/mabes-tni/uo/anggaran') }}">Anggaran Unit Organisasi</a></li>
            <li><a href="{{ URL('cms/mabes-tni/uo/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/mabes-tni/uo/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/mabes-tni/uo/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/mabes-tni/uo/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('tni_ad_uo')
            <li class="active"><a href="{{ URL('cms/tni-ad/uo/anggaran') }}">Anggaran Unit Organisasi</a></li>
            <li><a href="{{ URL('cms/tni-ad/uo/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/tni-ad/uo/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/tni-ad/uo/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/tni-ad/uo/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('tni_au_uo')
            <li class="active"><a href="{{ URL('cms/tni-au/uo/anggaran') }}">Anggaran Unit Organisasi</a></li>
            <li><a href="{{ URL('cms/tni-au/uo/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/tni-au/uo/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/tni-au/uo/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/tni-au/uo/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('tni_al_uo')
            <li class="active"><a href="{{ URL('cms/tni-al/uo/anggaran') }}">Anggaran Unit Organisasi</a></li>
            <li><a href="{{ URL('cms/tni-al/uo/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/tni-al/uo/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/tni-al/uo/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/tni-al/uo/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
              @endswitch  

            @elseif (Session::get('level') == 3)
            <li class="active"><a href="{{ URL('cms/kotama/anggaran') }}">Anggaran Kotama</a></li>
            <li><a href="{{ URL('cms/kotama/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/kotama/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/kotama/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/kotama/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
            @elseif (Session::get('level') == 4)
            <li class="active"><a href="{{ URL('cms/satker/anggaran') }}">Anggaran Satuan Kerja</a></li>
            <li><a href="{{ URL('cms/satker/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/satker/laporan-anggaran-belanja-pegawai') }}">Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/satker/laporan-anggaran-belanja-barang') }}">Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/satker/laporan-anggaran-belanja-modal') }}">Pelaksanaan Anggaran Belanja Modal</a>
                </li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Perkembangan Pengadaan Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            @switch(Session::get('level'))
                  @case(1)
                      <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case(2)
                      <li><a href="{{ URL('cms/uo/signout') }}">Logout</a></li>
                      @break
                  @case(3)
                      <li><a href="{{ URL('cms/kotama/signout') }}">Logout</a></li>
                      @break
                  @case(4)
                      <li><a href="{{ URL('cms/satker/signout') }}">Logout</a></li>
                      @break
              @endswitch
            
            @endif

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
</header>