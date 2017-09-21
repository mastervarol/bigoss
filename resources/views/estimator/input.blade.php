@extends('estimator.template')
@section('content')
  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/all.css')}}">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Estimator Biaya Retribusi IMB
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      {!! Form::open(array('url' => url('estimator/hasil'), 'role' => 'form', 'method' => 'POST')) !!}
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline">
              <!-- timeline time label -->
              <li class="time-label">
                <span class="bg-red">
                  Data Diri dan Bangunan
                </span>
              </li>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>

                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label" for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required="true" maxlength="100" placeholder="masukan nama" value="{{old('nama')}}">
                        @if ($errors->has('nama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->

                      <!-- text input -->
                      <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label" for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required="true" maxlength="100" placeholder="masukan alamat" value="{{old('alamat')}}">
                        @if ($errors->has('alamat'))
                        <span class="help-block">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->

                      {{-- row --}}
                      <div class="row">
                        <div class="col-md-6">
                          <!-- text input -->
                          <div class="form-group {{ $errors->has('luastanah') ? ' has-error' : '' }}">
                            <label class="control-label" for="luastanah">Luas Tanah</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="luastanah" name="luastanah" required="true" maxlength="100" placeholder="masukan luastanah" value="{{old('luastanah')}}">
                              <span class="input-group-addon">m<sup>2</sup></span>
                            </div>
                            @if ($errors->has('luastanah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('luastanah') }}</strong>
                            </span>
                            @endif
                          </div>
                          <!-- text input -->
                        </div>
                        <div class="col-md-6">
                          <!-- text input -->
                          <div class="form-group {{ $errors->has('luasbangunan') ? ' has-error' : '' }}">
                            <label class="control-label" for="luasbangunan">Luas Bangunan</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="luasbangunan" name="luasbangunan" required="true" maxlength="100" placeholder="masukan luasbangunan" value="{{old('luasbangunan')}}">
                              <span class="input-group-addon">m<sup>2</sup></span>
                            </div>
                            @if ($errors->has('luasbangunan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('luasbangunan') }}</strong>
                            </span>
                            @endif
                          </div>
                          <!-- text input -->
                        </div>
                      </div>
                      {{-- row --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Kondisi Bangunan</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkondisi" value="1" class="flat-red" checked>
                            &nbsp Baru
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkondisi" value="2" class="flat-red">
                            &nbsp Renovasi Sedang
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkondisi" value="3" class="flat-red">
                            &nbsp Renovasi Berat
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Fungsi Bangunan</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rfungsi" value="1" class="flat-red" checked>
                            &nbsp Hunian
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rfungsi" value="2" class="flat-red">
                            &nbsp Keagamaan
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rfungsi" value="3" class="flat-red">
                            &nbsp Usaha
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rfungsi" value="4" class="flat-red">
                            &nbsp Soshub
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rfungsi" value="5" class="flat-red">
                            &nbsp Khusus
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rfungsi" value="6" class="flat-red">
                            &nbsp Campuran
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline time label -->
              <li class="time-label">
                <span class="bg-red">
                  Klasifikasi Gedung
                </span>
              </li>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>

                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-body">
                      
                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Kompleksitas</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkompleksitas" value="1" class="flat-red" checked>
                            &nbsp Sederhana
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkompleksitas" value="2" class="flat-red">
                            &nbsp Tidak Sederhana
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkompleksitas" value="3" class="flat-red">
                            &nbsp Khusus
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Permanensi</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rpermanensi" value="1" class="flat-red" checked>
                            &nbsp Darurat
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rpermanensi" value="2" class="flat-red">
                            &nbsp Semi Permanen
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rpermanensi" value="3" class="flat-red">
                            &nbsp Permanen
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Resiko Kebakaran</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rresikokebakaran" value="1" class="flat-red" checked>
                            &nbsp Rendah
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rresikokebakaran" value="2" class="flat-red">
                            &nbsp Sedang
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rresikokebakaran" value="3" class="flat-red">
                            &nbsp Tinggi
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Zona Gempa</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rgempa" value="1" class="flat-red" checked>
                            &nbsp Zona V
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rgempa" value="2" class="flat-red">
                            &nbsp Kuat
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Kepadatan</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkepadatan" value="1" class="flat-red" checked>
                            &nbsp Rendah
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkepadatan" value="2" class="flat-red">
                            &nbsp Sedang
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkepadatan" value="3" class="flat-red">
                            &nbsp Tinggi
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Ketinggian</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rketinggian" value="1" class="flat-red" checked>
                            &nbsp Rendah (1 lt.)
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rketinggian" value="2" class="flat-red">
                            &nbsp Sedang (2-3 lt.)
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rketinggian" value="3" class="flat-red">
                            &nbsp Tinggi (>3 lt.)
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Kepemilikan</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkepemilikan" value="1" class="flat-red" checked>
                            &nbsp Negara, yayasan
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkepemilikan" value="2" class="flat-red">
                            &nbsp Perorangan
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rkepemilikan" value="3" class="flat-red">
                            &nbsp Badan Usaha
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Parameter Waktu</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rwaktu" value="1" class="flat-red" checked>
                            &nbsp Pendek (6 bln)
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rwaktu" value="2" class="flat-red">
                            &nbsp Menengah (3 thn)
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rwaktu" value="3" class="flat-red">
                            &nbsp Panjang (> 3 thn)
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                      {{-- radio --}}
                      <div class="form-group">
                        <label class="control-label">Dengan Basement</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rbasement" value="1" class="flat-red" checked>
                            &nbsp Ya
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="rbasement" value="2" class="flat-red">
                            &nbsp Tidak
                          </label>
                        </div>
                      </div>
                      {{-- radio --}}

                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline time label -->
              <li class="time-label">
                <span class="bg-red">
                  Prasarana Bangunan Gedung
                </span>
              </li>
              <!-- /.timeline-label -->

              <!-- 1 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi pembatas/penahan/pengaman kepemilikan</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('pagar') ? ' has-error' : '' }}">
                        <label class="control-label" for="pagar">Pagar</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="pagar" name="pagar" value="{{old('pagar')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('pagar'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pagar') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('tanggul') ? ' has-error' : '' }}">
                        <label class="control-label" for="tanggul">Tanggul / retaining wall</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="tanggul" name="tanggul" value="{{old('tanggul')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('tanggul'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tanggul') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('turap') ? ' has-error' : '' }}">
                        <label class="control-label" for="turap">Turap / batas kapling</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="turap" name="turap" value="{{old('turap')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('turap'))
                        <span class="help-block">
                            <strong>{{ $errors->first('turap') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->
              
              <!-- 2 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi penanda masuk lokasi</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('gapura') ? ' has-error' : '' }}">
                        <label class="control-label" for="gapura">Gapura / garda jada (L max x 2 m<sup>2</sup>)</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="gapura" name="gapura" value="{{old('gapura')}}">
                          <span class="input-group-addon">unit</span>
                        </div>
                        @if ($errors->has('gapura'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gapura') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihangapura') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihangapura">Kelebihan luas</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihangapura" name="kelebihangapura" value="{{old('kelebihangapura')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('kelebihangapura'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihangapura') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- 3 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi perkerasan</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('jalan4m') ? ' has-error' : '' }}">
                        <label class="control-label" for="jalan4m">Jalan lebar <= 4m</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="jalan4m" name="jalan4m" value="{{old('jalan4m')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('jalan4m'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jalan4m') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('jalanl4m') ? ' has-error' : '' }}">
                        <label class="control-label" for="jalanl4m">Jalan lebar > 4m</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="jalanl4m" name="jalanl4m" value="{{old('jalanl4m')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('jalanl4m'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jalanl4m') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('parkir') ? ' has-error' : '' }}">
                        <label class="control-label" for="parkir">Parkir, halaman dengan perkerasan sejenis</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="parkir" name="parkir" value="{{old('parkir')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('parkir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('parkir') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('lapangankomersil') ? ' has-error' : '' }}">
                        <label class="control-label" for="lapangankomersil">Lapangan terbuka tanpa perkerasan untuk komersil</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="lapangankomersil" name="lapangankomersil" value="{{old('lapangankomersil')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('lapangankomersil'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lapangankomersil') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- 4 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi penghubung</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('jembatan') ? ' has-error' : '' }}">
                        <label class="control-label" for="jembatan">Jembatan (luas max 5 m<sup>2</sup>)</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="jembatan" name="jembatan" value="{{old('jembatan')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('jembatan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jembatan') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihanjembatan') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihanjembatan">Kelebihan luasan</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihanjembatan" name="kelebihanjembatan" value="{{old('kelebihanjembatan')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('kelebihanjembatan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihanjembatan') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('boxculvert') ? ' has-error' : '' }}">
                        <label class="control-label" for="boxculvert">Box culvert</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="boxculvert" name="boxculvert" value="{{old('boxculvert')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('boxculvert'))
                        <span class="help-block">
                            <strong>{{ $errors->first('boxculvert') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihanboxculvert') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihanboxculvert">Kelebihan luasan</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihanboxculvert" name="kelebihanboxculvert" value="{{old('kelebihanboxculvert')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('kelebihanboxculvert'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihanboxculvert') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- 5 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi kolam / reservoir bawah tanah</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kolam100m') ? ' has-error' : '' }}">
                        <label class="control-label" for="kolam100m">Kolam renang < 100 m<sup>2</sup></label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kolam100m" name="kolam100m" value="{{old('kolam100m')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('kolam100m'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kolam100m') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kolaml100m') ? ' has-error' : '' }}">
                        <label class="control-label" for="kolaml100m">Kolam renang > 100 m<sup>2</sup></label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kolaml100m" name="kolaml100m" value="{{old('kolaml100m')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('kolaml100m'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kolaml100m') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kolampengolahan') ? ' has-error' : '' }}">
                        <label class="control-label" for="kolampengolahan">Kolam pengolahan / water treatment</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kolampengolahan" name="kolampengolahan" value="{{old('kolampengolahan')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('kolampengolahan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kolampengolahan') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('bakair') ? ' has-error' : '' }}">
                        <label class="control-label" for="bakair">Bak penyimpanan air bawah tanah atas tanah</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="bakair" name="bakair" value="{{old('bakair')}}">
                          <span class="input-group-addon">m<sup>2</sup></span>
                        </div>
                        @if ($errors->has('bakair'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bakair') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- 6 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi menara</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('menaraantena') ? ' has-error' : '' }}">
                        <label class="control-label" for="menaraantena">Menara antena sejenis tinggi max 5 mtr</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="menaraantena" name="menaraantena" value="{{old('menaraantena')}}">
                          <span class="input-group-addon">Unit</span>
                        </div>
                        @if ($errors->has('menaraantena'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menaraantena') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihanmenaraantena') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihanmenaraantena">Kelebihan Tinggi</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihanmenaraantena" name="kelebihanmenaraantena" value="{{old('kelebihanmenaraantena')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('kelebihanmenaraantena'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihanmenaraantena') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('menarareservoir') ? ' has-error' : '' }}">
                        <label class="control-label" for="menarareservoir">Menara reservoir max 2 m<sup>3</sup></label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="menarareservoir" name="menarareservoir" value="{{old('menarareservoir')}}">
                          <span class="input-group-addon">Unit</span>
                        </div>
                        @if ($errors->has('menarareservoir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('menarareservoir') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihanmenarareservoir') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihanmenarareservoir">Kelebihan kapasitas</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihanmenarareservoir" name="kelebihanmenarareservoir" value="{{old('kelebihanmenarareservoir')}}">
                          <span class="input-group-addon">m<sup>3</sup></span>
                        </div>
                        @if ($errors->has('kelebihanmenarareservoir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihanmenarareservoir') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('cerobong') ? ' has-error' : '' }}">
                        <label class="control-label" for="cerobong">Cerobong asap tinggi max 5 mtr</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="cerobong" name="cerobong" value="{{old('cerobong')}}">
                          <span class="input-group-addon">Unit</span>
                        </div>
                        @if ($errors->has('cerobong'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cerobong') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihancerobong') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihancerobong">Kelebihan Tinggi</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihancerobong" name="kelebihancerobong" value="{{old('kelebihancerobong')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('kelebihancerobong'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihancerobong') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- 7 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi monumen</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('tugu') ? ' has-error' : '' }}">
                        <label class="control-label" for="tugu">Tugu / monumen dalam persil (pekarangan)</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="tugu" name="tugu" value="{{old('tugu')}}">
                          <span class="input-group-addon">Unit</span>
                        </div>
                        @if ($errors->has('tugu'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tugu') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('patung') ? ' has-error' : '' }}">
                        <label class="control-label" for="patung">Patung non keagamaan dalam persil</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="patung" name="patung" value="{{old('patung')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('patung'))
                        <span class="help-block">
                            <strong>{{ $errors->first('patung') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- 8 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi instalasi / gardu</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('gardulistrik') ? ' has-error' : '' }}">
                        <label class="control-label" for="gardulistrik">Instalasi listrik gardu genzet luas max 10m<sup>2</sup></label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="gardulistrik" name="gardulistrik" value="{{old('gardulistrik')}}">
                          <span class="input-group-addon">Unit</span>
                        </div>
                        @if ($errors->has('gardulistrik'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gardulistrik') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihangardulistrik') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihangardulistrik">Kelebihan luas</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihangardulistrik" name="kelebihangardulistrik" value="{{old('kelebihangardulistrik')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('kelebihangardulistrik'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihangardulistrik') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
                        <label class="control-label" for="telepon">Instalasi telepon / komunikasi / shelter</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="telepon" name="telepon" value="{{old('telepon')}}">
                          <span class="input-group-addon">Unit</span>
                        </div>
                        @if ($errors->has('telepon'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telepon') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                      <!-- text input -->
                      <div class="form-group {{ $errors->has('kelebihantelepon') ? ' has-error' : '' }}">
                        <label class="control-label" for="kelebihantelepon">Kelebihan luas</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="kelebihantelepon" name="kelebihantelepon" value="{{old('kelebihantelepon')}}">
                          <span class="input-group-addon">m<sup>'</sup></span>
                        </div>
                        @if ($errors->has('kelebihantelepon'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kelebihantelepon') }}</strong>
                        </span>
                        @endif
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- 9 timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Konstruksi reklame / papan nama</h3>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                      {{-- sub --}}
                      <div>
                        <h4>A. Billboard</h4>
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('billboard8') ? ' has-error' : '' }}">
                          <label class="control-label" for="billboard8">Luas bidang reklame 8 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="billboard8" name="billboard8" value="{{old('billboard8')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('billboard8'))
                          <span class="help-block">
                              <strong>{{ $errors->first('billboard8') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('billboard20') ? ' has-error' : '' }}">
                          <label class="control-label" for="billboard20">Luas bidang reklame 8.01 s/d 20.00 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="billboard20" name="billboard20" value="{{old('billboard20')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('billboard20'))
                          <span class="help-block">
                              <strong>{{ $errors->first('billboard20') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('billboard48') ? ' has-error' : '' }}">
                          <label class="control-label" for="billboard48">Luas bidang reklame 20.01 s/d 48.00 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="billboard48" name="billboard48" value="{{old('billboard48')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('billboard48'))
                          <span class="help-block">
                              <strong>{{ $errors->first('billboard48') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('billboard100') ? ' has-error' : '' }}">
                          <label class="control-label" for="billboard100">Luas bidang reklame 48.01 s/d 100 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="billboard100" name="billboard100" value="{{old('billboard100')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('billboard100'))
                          <span class="help-block">
                              <strong>{{ $errors->first('billboard100') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('kelebihanbillboard') ? ' has-error' : '' }}">
                          <label class="control-label" for="kelebihanbillboard">kelebihan luasan > 100 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="kelebihanbillboard" name="kelebihanbillboard" value="{{old('kelebihanbillboard')}}">
                            <span class="input-group-addon">m<sup>2</sup></span>
                          </div>
                          @if ($errors->has('kelebihanbillboard'))
                          <span class="help-block">
                              <strong>{{ $errors->first('kelebihanbillboard') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                      </div>
                      {{-- sub --}}

                      {{-- sub --}}
                      <div>
                        <h4>B. Neon Box</h4>
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('neon6') ? ' has-error' : '' }}">
                          <label class="control-label" for="neon6">Luas bidang reklame maks 6 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="neon6" name="neon6" value="{{old('neon6')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('neon6'))
                          <span class="help-block">
                              <strong>{{ $errors->first('neon6') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('kelebihanneon') ? ' has-error' : '' }}">
                          <label class="control-label" for="kelebihanneon">Kelebihan luasan > 6 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="kelebihanneon" name="kelebihanneon" value="{{old('kelebihanneon')}}">
                            <span class="input-group-addon">m<sup>2</sup></span>
                          </div>
                          @if ($errors->has('kelebihanneon'))
                          <span class="help-block">
                              <strong>{{ $errors->first('kelebihanneon') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                      </div>
                      {{-- sub --}}

                      {{-- sub --}}
                      <div>
                        <h4>C. Baliho</h4>
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('baliho8') ? ' has-error' : '' }}">
                          <label class="control-label" for="baliho8">Luas bidang reklame 8 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="baliho8" name="baliho8" value="{{old('baliho8')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('baliho8'))
                          <span class="help-block">
                              <strong>{{ $errors->first('baliho8') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('baliho20') ? ' has-error' : '' }}">
                          <label class="control-label" for="baliho20">Luas bidang reklame 8.01 s/d 20.00 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="baliho20" name="baliho20" value="{{old('baliho20')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('baliho20'))
                          <span class="help-block">
                              <strong>{{ $errors->first('baliho20') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('baliho48') ? ' has-error' : '' }}">
                          <label class="control-label" for="baliho48">Luas bidang reklame 20.01 s/d 48.00 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="baliho48" name="baliho48" value="{{old('baliho48')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('baliho48'))
                          <span class="help-block">
                              <strong>{{ $errors->first('baliho48') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                      </div>
                      {{-- sub --}}

                      {{-- sub --}}
                      <div>
                        <h4>D. Papan Nama</h4>
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('papan2') ? ' has-error' : '' }}">
                          <label class="control-label" for="papan2">Berdiri sendiri / nempel di tembok pagar luas max 2 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="papan2" name="papan2" value="{{old('papan2')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('papan2'))
                          <span class="help-block">
                              <strong>{{ $errors->first('papan2') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('kelebihanpapan') ? ' has-error' : '' }}">
                          <label class="control-label" for="kelebihanpapan">Kelebihan luasan > 2 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="kelebihanpapan" name="kelebihanpapan" value="{{old('kelebihanpapan')}}">
                            <span class="input-group-addon">m<sup>2</sup></span>
                          </div>
                          @if ($errors->has('kelebihanpapan'))
                          <span class="help-block">
                              <strong>{{ $errors->first('kelebihanpapan') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                      </div>
                      {{-- sub --}}

                      {{-- sub --}}
                      <div>
                        <h4>A. Videotron / Megatron</h4>
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('video8') ? ' has-error' : '' }}">
                          <label class="control-label" for="video8">Luas bidang reklame 8 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="video8" name="video8" value="{{old('video8')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('video8'))
                          <span class="help-block">
                              <strong>{{ $errors->first('video8') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('video20') ? ' has-error' : '' }}">
                          <label class="control-label" for="video20">Luas bidang reklame 8.01 s/d 20.00 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="video20" name="video20" value="{{old('video20')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('video20'))
                          <span class="help-block">
                              <strong>{{ $errors->first('video20') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('video48') ? ' has-error' : '' }}">
                          <label class="control-label" for="video48">Luas bidang reklame 20.01 s/d 48.00 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="video48" name="video48" value="{{old('video48')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('video48'))
                          <span class="help-block">
                              <strong>{{ $errors->first('video48') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('video100') ? ' has-error' : '' }}">
                          <label class="control-label" for="video100">Luas bidang reklame 48.01 s/d 100 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="video100" name="video100" value="{{old('video100')}}">
                            <span class="input-group-addon">Unit</span>
                          </div>
                          @if ($errors->has('video100'))
                          <span class="help-block">
                              <strong>{{ $errors->first('video100') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                        <!-- text input -->
                        <div class="form-group {{ $errors->has('kelebihanvideo') ? ' has-error' : '' }}">
                          <label class="control-label" for="kelebihanvideo">kelebihan luasan > 100 m<sup>2</sup></label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="kelebihanvideo" name="kelebihanvideo" value="{{old('kelebihanvideo')}}">
                            <span class="input-group-addon">m<sup>2</sup></span>
                          </div>
                          @if ($errors->has('kelebihanvideo'))
                          <span class="help-block">
                              <strong>{{ $errors->first('kelebihanvideo') }}</strong>
                          </span>
                          @endif
                        </div>
                        <!-- text input -->
                      </div>
                      {{-- sub --}}
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

              <!-- timeline time label -->
              <li class="time-label">
                <span class="bg-red">
                  Hitung Retribusi
                </span>
              </li>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-envelope bg-blue"></i>

                <div class="timeline-item">
                  {{-- box --}}
                  <div class="box box-primary">
                    <div class="box-body">
                      <!-- text input -->
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Hitung Retribusi</button>
                      </div>
                      <!-- text input -->
                    </div>
                    <!-- /.box-body -->
                  </div>
                  {{-- box --}}
                </div>
              </li>
              <!-- END timeline item -->

            </ul>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- iCheck 1.0.1 -->
  <script src="{{asset('assets/plugins/iCheck/icheck.min.js')}}"></script>
  <script>
    $(function () {
      //active tree and menu
      $('#estimator-menu').addClass('active');

      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })
    });
  </script>
@endsection