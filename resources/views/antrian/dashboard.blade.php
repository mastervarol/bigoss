@extends('antrian.template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="row">
          <img src="{{asset('assets/dist/img/antrian-online-header.jpg')}}" class="img-responsive">
       </div>
    </div>

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
      <div class="row">
        <div class="col-md-6">
          <!-- Chat box -->
          <div class="box box-danger">
            <div class="box-header">
              <i class="fa fa-question-circle"></i>
              <h3 class="box-title">Tutorial Antrian Online</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2Q5lL81Rsho" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.chat -->
          </div>
          <!-- /.box (chat box) -->
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-ticket"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Antrian Online Terlayani</span>
                  <span class="info-box-number">{{$rekap->hantrianterlayani}} Terlayani</span>

                  <div class="progress">
                    @if($rekap->hantrianterlayani != 0 && $rekap->htotalantrian != 0)
                    <div class="progress-bar" style="width: {{($rekap->hantrianterlayani/$rekap->htotalantrian)*100}}%"></div>
                    @else
                    <div class="progress-bar" style="width: 100%"></div>
                    @endif
                  </div>
                  <span class="progress-description">
                        {{$rekap->hantrianterlayani}} dari {{$rekap->htotalantrian}} telah dilayani
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-desktop"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Jumlah Loket Beroperasi</span>
                  <span class="info-box-number">{{$rekap->loket}} Loket</span>

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
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-ticket"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Antrian Online Besok</span>
                  <span class="info-box-number">{{$rekap->antrianbesok}} Terambil</span>

                  <div class="progress">
                    @if($rekap->hantrianterlayani != 0 && $rekap->htotalantrian != 0)
                    <div class="progress-bar" style="width: {{($rekap->antrianbesok/$rekap->jumlahantrianbesok)*100}}%"></div>
                    @else
                    <div class="progress-bar" style="width: 0%"></div>
                    @endif
                  </div>
                  <span class="progress-description">
                        {{$rekap->antrianbesok}} dari {{$rekap->jumlahantrianbesok}} terambil
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-paperclip"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Jumlah Layanan</span>
                  <span class="info-box-number">{{$rekap->layanan}} Layanan</span>

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
          </div>
        </div>
      </div>
      <div class="row">
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