@extends('antrian.template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda Antrian Online
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      @if(Session::has('msgsave'))
      <!-- Info alert -->
      <div id="alert" class="alert alert-success alert-styled-left alert-arrow-left alert-component animated shake">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
        <h6 class="alert-heading text-semibold">{{Session::get('msgsave')}}</h6>    
      </div>
      <!-- /info alert -->
      @endif
      @if(Auth::user() != null)
      <div class="col-md-4">
        <div class="box box-warning box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Antrian Aktif</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            @if($antrian != null)
            <strong># Pemohon</strong>
            <br>
            &nbsp {{$antrian->nomor}}
            <br>

            <br>
            <strong>Izin</strong>
            <br>
            &nbsp {{$antrian->layanan->izin->izin}} 
            <br>

            <br>
            <strong>Layanan</strong>
            <br>
            &nbsp {{$antrian->layanan->layanan}}
            <br>

            <br>
            <strong>Loket</strong>
            <br>
            &nbsp {{$antrian->loket->loket}}
            <br>

            <br>
            <strong>Tgl</strong>
            <br>
            &nbsp {{$antrian->tgl}}
            <br>

            <br>
            <strong>Token</strong>
            <br>
            &nbsp {{$antrian->token}}
            <br>
            @else
            Anda tidak memiliki antrian aktif
            @endif
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      @endif
      <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Antrian Tersisa Hari Ini</span>
            <span class="info-box-number">30</span>

            <div class="progress">
              <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
                  30/60 nomor antrian telah dilayani
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Loket Beroperasi</span>
            <span class="info-box-number">4</span>

            {{-- <div class="progress">
              <div class="progress-bar" style="width: 20%"></div>
            </div>
            <span class="progress-description">
                  20% Increase in 30 Days
                </span> --}}
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-4">
        <div class="info-box bg-red">
          <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Antrian Tersisa Besok</span>
            <span class="info-box-number">45</span>

            <div class="progress">
              <div class="progress-bar" style="width: 25%"></div>
            </div>
            <span class="progress-description">
                  45 dari 60 nomor antrian 
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-aqua">
          <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Layanan</span>
            <span class="info-box-number">4 Layanan</span>

            {{-- <div class="progress">
              <div class="progress-bar" style="width: 40%"></div>
            </div>
            <span class="progress-description">
                  40% Increase in 30 Days
                </span> --}}
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(function () {
      //active tree and menu
      $('#beranda-menu').addClass('active');
    });
  </script>
@endsection