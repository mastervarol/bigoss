@extends('template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="border-left: 0px; 
  background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(255,255,255,0.3)), url('{{asset('assets/dist/img/bgkayu.jpg')}}')">
    {{-- container --}}
    <div class="container">
      <!-- Content Header (Page header) -->
      <img style="margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: 30px" class="img-responsive" src="{{asset('assets/dist/img/bigoss/bigoss-admin.png')}}">

      <!-- Main content -->
      <section class="content">
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/bigoss/icon-siaplapor.png')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><b>SIAPLapor</b></h3>
              <h5 class="widget-user-desc">Sistem Informasi Aspirasi Pengaduan dan Pelaporan</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="{{url('siaplapor')}}" style="text-align: center;">Punya Keluhan? Klik Disini! <i class="fa fa-arrow-circle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/bigoss/icon-antrian.png')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><b>Antrian Online</b></h3>
              <h5 class="widget-user-desc">Antrian Layanan Konsultasi Izin</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="{{url('antrianonline')}}" style="text-align: center;">Mau Ngurus Izin? Yuk Ngantri! <i class="fa fa-arrow-circle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/bigoss/icon-undagi.png')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><b>UNDAGI</b></h3>
              <h5 class="widget-user-desc">Unit Desain Arsitektur Gratis</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="{{url('antrianonline')}}" style="text-align: center;">Dapatkan desain rumahmu GRATIS!! <i class="fa fa-arrow-circle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/logobadung.png')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><b>SIMPONIE</b></h3>
              <h5 class="widget-user-desc">Sistem Informasi Manajemen Perizinan Online </h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="http://simponie.badungkab.go.id/simponiebadungkab/" style="text-align: center;">Gunakan SIMPONIE (SIUP dan TDP) <i class="fa fa-arrow-circle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/bigoss/bkpm.jpg')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><b>BKPM SPIPISE</b></h3>
              <h5 class="widget-user-desc">Sistem Pelayanan Informasi dan Perizinan Investasi Secara Elektronik</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="http://online-spipise.bkpm.go.id" style="text-align: center;">Gunakan SPIPISE (Izin Prinsip PMA dan PMDN) <i class="fa fa-arrow-circle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/logobadung.png')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><b>SI MANIZ</b></h3>
              <h5 class="widget-user-desc">Sistem Informasi Manajemen Perizinan</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="http://simaniz.dpmptsp.badungkab.go.id/newperizinan/login.php?logout=logout" style="text-align: center;">Gunakan SI MANIZ (ITR, IMB, Izin Gangguan, TDUP, dan SIUP-MB) <i class="fa fa-arrow-circle-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      </section>
      <!-- /.content -->
    </div>
    {{-- /.container --}}
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(function () {
      //active tree and menu
      $('#dashboard-menu').addClass('active');
    });
  </script>
@endsection