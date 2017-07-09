@extends('siaplapor.template')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelaporan Layanan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      {!! Form::open(array('url' => url('siaplapor/pelaporan'), 'role' => 'form', 'method' => 'POST')) !!}
        <div class="row">
          <div class="col-md-6">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Ketentuan SIAPLAPOR</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ol type="1">
                  
                </ol>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Formulir Pelaporan Layanan</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- text input -->
                <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
                  <label class="control-label" for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" required="true" maxlength="100" placeholder="masukan judul laporan" value="{{old('judul')}}">
                  @if ($errors->has('judul'))
                  <span class="help-block">
                      <strong>{{ $errors->first('judul') }}</strong>
                  </span>
                  @endif
                </div>
                <!-- text input -->

                <!-- text input -->
                <div class="form-group {{ $errors->has('laporan') ? ' has-error' : '' }}">
                  <label class="control-label" for="laporan">Laporan</label>
                  <textarea class="form-control" id="laporan" name="laporan" required="true" placeholder="masukan laporan">{{old('laporan')}}</textarea>
                  @if ($errors->has('laporan'))
                  <span class="help-block">
                      <strong>{{ $errors->first('laporan') }}</strong>
                  </span>
                  @endif
                </div>
                <!-- text input -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Laporkan Pelayanan</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection