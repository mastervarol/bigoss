@extends('template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    {{-- container --}}
    <div class="container">
      <!-- Content Header (Page header) -->
      <img style="margin-top: 10px; margin-left: auto; margin-right: auto" class="img-responsive hidden-sm hidden-xs" src="{{asset('assets/dist/img/bigoss/bigoss-merah.png')}}">

      <!-- Main content -->
      <section class="content">
        <div class="col-md-6">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/bigoss/siaplapor.png')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">SIAPLapor</h3>
              <h5 class="widget-user-desc">Pengaduan Layanan Penanaman Modal</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="{{url('siaplapor')}}" style="text-align: center;">Layangkan aduan <i class="fa fa-arrow-circle-right"></i></a></li>
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
            <div class="widget-user-header bg-green">
              <div class="widget-user-image">
                <img src="{{asset('assets/dist/img/bigoss/antrianonline.png')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Antrian Online</h3>
              <h5 class="widget-user-desc">Antrian Layanan Penanaman Modal</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="{{url('antrianonline')}}" style="text-align: center;">Ayo mengantri <i class="fa fa-arrow-circle-right"></i></a></li>
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