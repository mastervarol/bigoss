@extends('siaplapor.template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="row">
      <img src="{{asset('assets/dist/img/siap-lapor-header.jpg')}}" class="img-responsive">
       </div>
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda SIAPLAPOR
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
        <div class="col-md-12">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
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
      <div class="row">
        <div class="col-md-12">
          <!-- Chat box -->
          <div class="box box-danger">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Laporan Terbaru</h3>
            </div>
            @foreach($laporans as $lap)
            <div class="box-body chat">
              <!-- chat item -->
              <div class="item">
                <img src="{{asset('assets/dist/img/bigoss/icon-bigoss.png')}}" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$lap->created_at}}</small>
                    <strong>
                      @if($lap->created_by == null)
                        {{$lap->nama}}
                      @else
                        {{$lap->pelapor->nama}}
                      @endif
                    </strong>
                  </a>
                  {{-- <strong style="font-size: 14pt">{{$lap->judul}}</strong><br><br> --}}
                  {{$lap->laporan}}
                </p>
                @if($lap->tanggapan_by != null)
                <div class="attachment">
                  <h4>Oleh: {{$lap->penanggap->nama}}</h4>

                  <p>
                    {{$lap->tanggapan}}
                  </p>
                </div>
                @endif
              </div>
              <!-- /.item -->
            </div>
            @endforeach
            <!-- /.chat -->
          </div>
          <!-- /.box (chat box) -->
        </div>
        {{-- <div class="col-md-6">
          <!-- Chat box -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Tanggapan Terbaru</h3>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <img src="{{asset('assets/dist/img/user2-160x160b.jpg')}}" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                    Mike Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
              <!-- /.item -->
            </div>
            <!-- /.chat -->
          </div>
          <!-- /.box (chat box) -->
        </div> --}}
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