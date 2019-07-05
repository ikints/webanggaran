<div class="top-head">
    <div class="container">
      <section class="desktop-header">
      <div class="row">
        <div class="col-md-7 pull-left">
          <div class="row">
            <div class="col-md-2 text-left nopadding">
              <a href="#" title="Kementerian Pertahanan"><img class="img-responsive logo" src="{{ URL('public/images/') }}/logo.png"/>
          </a>
            </div>
            <div class="col-md-10 text-left user-padding">
              <span class="a-mon">Sistem Pelaporan Keuangan & Kinerja Pembangunan Pertahanan</span><br>
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
      </section>
      <section class="mobile-header">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <a href="#" title="Kementerian Pertahanan"><img class="img-responsive m-logo" src="{{ URL('public/images/') }}/logo.png"/>
          </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 text-center">
              <span class="m-a-mon">Sistem Pelaporan Keuangan & Kinerja Pembangunan Pertahanan</span><br>
              <span class="m-k-per">Kementerian Pertahanan Republik Indonesia</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-10 text-center padding-20">
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
            <div class="col-md-2 text-center user"><i class="fa fa-user"></i></div>
          </div>
        </div>
      </div>
    </section>
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
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perumahan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pinjaman</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
            @elseif (Session::get('level') == 2)
                
              @switch(Session::get('username'))
                  @case('kemhan_uo')
            <li class="active"><a href="{{ URL('cms/kemhan/uo/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/kemhan/uo/revisi-anggaran') }}">Revisi Anggaran</a></li>
            <li><a href="{{ URL('cms/kemhan/uo/realisasi-anggaran') }}">Realisasi Anggaran</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ URL('cms/kemhan/uo/laporan-perkembangan-pengadaan-barang-dan-jasa') }}">Laporan Perkembangan Pengadaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-perkembangan-pembangunan-dan-pengembangan-fasilitas') }}">Laporan Perkembangan Pembangunan dan Pengembangan Fasilitas</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-realisasi-anggaran') }}">Laporan Realisasi Anggaran</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i') }}">Laporan Realisasi Anggaran Pendapatan Tingkat Eselon I</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja') }}">Laporan Realisasi Anggaran Pendapatan Tingkat Eselon I Menurut Wilayah Satuan Kerja</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-menurut-wilayah-satuan-kerja-tingkat-eselon-i') }}">Laporan Realisasi Anggaran Belanja Menurut Wilayah/Satuan Kerja Tingkat Eselon I</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i') }}">Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja / Akun Tingkat Eselon I</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-realisasi-anggaran-belanja-menurut-sumber-dana-program-kegiatan-tingkat-eselon-i') }}">Laporan Realisasi Anggaran Belanja Menurut Sumber Dana Program Kegiatan Tingkat Eselon I</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-pelaksanaan-anggaran-belanja-pegawai') }}">Laporan Pelaksanaan Anggaran Belanja Pegawai</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-pelaksanaan-anggaran-belanja-barang') }}">Laporan Pelaksanaan Anggaran Belanja Barang</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-pelaksanaan-anggaran-belanja-modal') }}">Laporan Pelaksanaan Anggaran Belanja Modal</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-pelaksanaan-barang-dan-jasa') }}">Laporan Pelaksanaan Barang dan Jasa</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-pelaksanaan-perkembangan-kegiatan-prioritas') }}">Laporan Pelaksanaan Perkembangan Kegiatan Prioritas</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-pelaksanaan-perkembangan-pembangunan-dan-fasilitas') }}">Laporan Pelaksanaan Perkembangan Pembangunan dan Fasilitas</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-realisasi-pelaksanaan-anggaran-perjenis-belanja') }}">Laporan Pelaksanaan Anggaran Perjenis Belanja</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-penerimaan-hibah-dalam-negeri') }}">Laporan Penerimaan Hibah dalam Negeri</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-pendapatan-negara') }}">Laporan Pendapatan Negara</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-pemeliharaan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-alutsista') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-mef') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-perbatasan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-pinjaman') }}">Laporan Anggaran Pinjaman</a></li>
                <li><a href="{{ URL('cms/kemhan/uo/laporan-anggaran-prioritas') }}">Laporan Anggaran Prioritas</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('mabes_tni_uo')
            <li class="active"><a href="{{ URL('cms/mabes-tni/uo/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/mabes-tni/uo/revisi-anggaran') }}">Revisi Anggaran</a></li>
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
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perumahan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pinjaman</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('tni_ad_uo')
            <li class="active"><a href="{{ URL('cms/tni-ad/uo/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/tni-ad/uo/revisi-anggaran') }}">Revisi Anggaran</a></li>
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
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perumahan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pinjaman</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('tni_au_uo')
            <li class="active"><a href="{{ URL('cms/tni-au/uo/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/tni-au/uo/revisi-anggaran') }}">Revisi Anggaran</a></li>
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
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perumahan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pinjaman</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
                  @case('tni_al_uo')
            <li class="active"><a href="{{ URL('cms/tni-al/uo/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/tni-al/uo/revisi-anggaran') }}">Revisi Anggaran</a></li>
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
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perumahan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pinjaman</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
             </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
                      @break
              @endswitch  

            @elseif (Session::get('level') == 3)
            <li class="active"><a href="{{ URL('cms/kotama/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/kotama/revisi-anggaran') }}">Revisi Anggaran</a></li>
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
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perumahan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pinjaman</a></li>
                <li><a href="{{ URL('laporan') }}">Penerimaan Hibah Dalam Negeri</a></li>
                <li><a href="{{ URL('laporan') }}">Pendapatan Negara</a></li>
              </ul>
            </li>
            <li><a href="{{ URL('cms/signout') }}">Logout</a></li>
            @elseif (Session::get('level') == 4)
            <li class="active"><a href="{{ URL('cms/satker/anggaran') }}">Anggaran</a></li>
            <li><a href="{{ URL('cms/satker/revisi-anggaran') }}">Revisi Anggaran</a></li>
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
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Prioritas</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perumahan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pemeliharaan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Alutsista</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran MEF</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Perbatasan</a></li>
                <li><a href="{{ URL('laporan') }}">Laporan Anggaran Pinjaman</a></li>
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