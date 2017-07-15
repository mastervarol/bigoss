@extends('siaplapor.template')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Saya
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Chat box -->
          <div class="box box-danger">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Laporan Saya</h3>
            </div>
            @foreach($laporan as $lap)
            <div class="box-body chat">
              <!-- chat item -->
              <div class="item">
                <img src="{{asset('assets/dist/img/bigoss/icon-bigoss.png')}}" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$lap->created_at}}</small>
                    <strong>{{$lap->pelapor->nama}}</strong>
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
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(function () {
      //active tree and menu
      $('#laporansaya-menu').addClass('active');
    });
  </script>
@endsection