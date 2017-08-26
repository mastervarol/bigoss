@extends('undagi.template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda UNDAGI (Unit Desain Arsitektur Gratis)
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
              <h3 class="box-title">Tutorial SIAPLapor</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/huvt93qLtUo" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.chat -->
          </div>
          <!-- /.box (chat box) -->
        </div>
        <div class="col-md-6">
          <!-- Chat box -->
          <div class="box box-danger">
            <div class="box-header">
              <i class="fa fa-question-circle"></i>
              <h3 class="box-title">Kontak SIAPLapor</h3>
            </div>
            <div class="box-body">
              <h4>Adukan dan Laporkan keluhan, kritik, dan saran anda kepada kami melalui aplikasi SIAPLapor atau pada kontak dibawah ini</h4>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <i class="fa fa-envelope"></i>
                      <h3 class="box-title">Email</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <a href="mailto:dpmptspbadungkab@gmail.com">dpmptspbadungkab@gmail.com</a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <div class="col-md-6">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <i class="fa fa-phone"></i>
                      <h3 class="box-title">Telepon</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      Telp : <a href="tel:+623614715259"><b>0361-4715259</b></a><br>Fax: <a href="tel:+623614715258"><b>0361-4715258</b></a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <i class="fa fa-comments-o"></i>
                      <h3 class="box-title">WhatApp</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <div class="col-md-6">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <i class="fa fa-question-circle"></i>
                      <h3 class="box-title">Lainnya</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
            </div>
            <!-- /.chat -->
          </div>
          <!-- /.box (chat box) -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(function () {
      //active tree and menu
      $('#dashboard-menu').addClass('active');
    });
  </script>
@endsection