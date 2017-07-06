@extends('antrian.template')
@section('content')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('assets/plugins/datatables/dataTables.bootstrap.css')}}">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Riwayat Antrian
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('antrianonline/')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Riwayat Antrian</li>
      </ol>
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
      @if(Session::has('msgedit'))
      <!-- Info alert -->
      <div id="alert" class="alert alert-info alert-styled-left alert-arrow-left alert-component animated shake">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
        <h6 class="alert-heading text-semibold">{{Session::get('msgedit')}}</h6>  
      </div>
      <!-- /info alert -->
      @endif
      @if(Session::has('msgdelete'))
      <!-- Info alert -->
      <div id="alert" class="alert alert-danger alert-styled-left alert-arrow-left alert-component animated shake">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
        <h6 class="alert-heading text-semibold">{{Session::get('msgdelete')}}</h6>
      </div>
      <!-- /info alert -->
      @endif

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Loket</th>
                    <th>Layanan</th>
                    <th>Izin</th>
                    <th>Tgl</th>
                  </tr>
                </thead>
                <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach($antrians as $u)
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $u -> loket -> loket or '' }}</td>
                    <td>{{ $u -> layanan -> layanan or '' }}</td>
                    <td>{{ $u -> layanan -> izin -> izin or '' }}</td>
                    <td>{{ $u -> tgl or ''}}</td>
                  </tr>
                @php
                  $no++;
                @endphp
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Loket</th>
                    <th>Layanan</th>
                    <th>Izin</th>
                    <th>Tgl</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<script>
  $(function () {
    $('#riwayat-menu').addClass('active');

    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection