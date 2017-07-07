@extends('antrian.template')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pendaftaran Antrian ({{$tglantri->formatLocalized("%A")}}, {{$tglantri->toDateString()}})
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      {!! Form::open(array('url' => url('antrianonline/pendaftaran'), 'role' => 'form', 'method' => 'POST')) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Ketentuan Antrian Online</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ol type="1">
                  <li>Pemohon antrian online agar memilih izin, layanan, dan nomor antrian dengan benar.</li><br>
                  <li>Setiap pemohon hanya dapat mendaftarkan :<br>-  1 nomor antrian dalam 1 hari dan <br>-  3 nomor antrian dalam 1 minggu</li><br>
                  <li>Waktu pemohon antrian dibuka pada pukul 01:00 – 23:00 WIB, untuk digunakan pada esok harinya.</li><br>
                  <li>Layanan dibuka untuk hari kerja (senin - jumat). pendaftaran antrian yang dilakukan pada hari jumat-minggu otomatis mendapat layanan pada hari senin.</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Formulir Antrian Online</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              @if($antrian == null)  
              <!-- select -->
                <div class="form-group">
                  <label class="control-label" for="izin">1. Pilih perizinan yang diinginkan</label>
                  <select class="form-control" id="izin" name="izin" onchange="setlayanan()">
                    @foreach($izins as $i)
                    <option value="{{$i->id_izin}}">{{$i->izin}}</option>
                    @endforeach
                  </select>
                </div>
                <!-- select -->

                <!-- select -->
                <div class="form-group">
                  <label class="control-label" for="layanan">2. Pilih layanan berdasarkan perizinan</label>
                  <select class="form-control" id="layanan" name="layanan" onchange="setloket()">
                  </select>
                </div>
                <!-- select -->

                <!-- select -->
                <div class="form-group">
                  <label class="control-label" for="loket">3. Pilih Loket berdasarkan layanan</label>
                  <select class="form-control" id="loket" name="loket" onchange="setwaktu()">
                  </select>
                </div>
                <!-- select -->

                <!-- select -->
                <div class="form-group">
                  <label class="control-label" for="waktu">4. Pilih waktu antrian berdasarkan loket</label>
                  <select class="form-control" id="waktu" name="waktu">
                  </select>
                </div>
                <!-- select -->

              </div>
              
              <div id="loadingcontainer">
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Daftarkan Antrian</button>
              </div>
              @else
              <h2>Anda sudah melakukan antrian</h2>
              @endif
            </div>
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    var izin = null;
    var layanan = null;
    var loket = null;
    var waktu = null;
    var loadingcontainer = null;

    $(function () {
      //active tree and menu
      $('#pendaftaran-menu').addClass('active');
    
      loadingcontainer = $('#loadingcontainer');
      izin = $('#izin');
      layanan = $('#layanan');
      loket = $('#loket');
      waktu = $('#waktu');

      setlayanan();
    });

    function setlayanan()
    {
      loadingcontainer.html('<div class="overlay" id="loading"> <i class="fa fa-refresh fa-spin"></i></div>');
      layanan.empty();

      $.get("{{url('antrianonline/ajax_layanan')}}/" + izin.val(), function( data ) {

        $.each(data, function(key, value) {   
          layanan
            .append($("<option></option>")
            .attr("value",value.id_layanan)
            .text(value.layanan));
        });
      }, "json" ).done(function() {
        loadingcontainer.html("");
        setloket();
      });
    }

    function setloket()
    {
      loadingcontainer.html('<div class="overlay" id="loading"> <i class="fa fa-refresh fa-spin"></i></div>');
      loket.empty();

      $.get("{{url('antrianonline/ajax_loket')}}/" + layanan.val(), function( data ) {

        $.each(data, function(key, value) {   
          loket
            .append($("<option></option>")
            .attr("value",value.id_loket)
            .text(value.loket));
        });
      }, "json" ).done(function() {
        loadingcontainer.html("");
        setwaktu();
      });
    }

    function setwaktu()
    {
      loadingcontainer.html('<div class="overlay" id="loading"> <i class="fa fa-refresh fa-spin"></i></div>');
      waktu.empty();

      $.get("{{url('antrianonline/ajax_waktu')}}/" + loket.val(), function( data ) {

        $.each(data, function(key, value) {   
          waktu
            .append($("<option></option>")
            .attr("value",value)
            .text(value));
        });
      }, "json" ).done(function() {
        loadingcontainer.html("");
      });
    }
  </script>
@endsection