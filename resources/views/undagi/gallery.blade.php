@extends('undagi.template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gallery UNDAGI
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
              <i class="fa fa-photo"></i>
              <h3 class="box-title">Denah</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <a href="{{asset('assets/dist/img/undagi/gambar/denah.jpeg')}}" target="_blank" title="klik untuk memperbesar">
                    <img class="img-responsive" src="{{asset('assets/dist/img/undagi/gambar/denah.jpeg')}}">
                  </a>
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
              <!-- Chat box -->
              <div class="box box-danger">
                <div class="box-header">
                  <i class="fa fa-photo"></i>
                  <h3 class="box-title">Denah Tipe 150</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <a href="{{asset('assets/dist/img/undagi/gambar/denah-150.jpeg')}}" target="_blank" title="klik untuk memperbesar">
                        <img class="img-responsive" src="{{asset('assets/dist/img/undagi/gambar/denah-150.jpeg')}}">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /.chat -->
              </div>
              <!-- /.box (chat box) -->
            </div>
            <div class="col-md-12">
              <!-- Chat box -->
              <div class="box box-danger">
                <div class="box-header">
                  <i class="fa fa-photo"></i>
                  <h3 class="box-title">Denah Tipe 100</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <a href="{{asset('assets/dist/img/undagi/gambar/denah-100.jpeg')}}" target="_blank" title="klik untuk memperbesar">
                        <img class="img-responsive" src="{{asset('assets/dist/img/undagi/gambar/denah-100.jpeg')}}">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /.chat -->
              </div>
              <!-- /.box (chat box) -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(function () {
      //active tree and menu
      $('#gallery-menu').addClass('active');
    });
  </script>
@endsection