@extends('undagi.template')
@section('content')

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset('assets/plugins/datepicker/datepicker3.css')}}">

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Permohonan Layanan Undagi
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    {!! Form::open(array('url' => url('undagi/permohonan'), 'role' => 'form', 'method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
      <div class="row">
        <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Ketentuan Permohonan Online UNDAGI</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ol type="1">
                <li>Pemohon layanan mengisi form permohonan sesuai kolom isian.</li><br>
                
                <li>Melakukan upload dokumen berupa scan dan membawa dokumen asli pada saat konsultasi:<br>
                  - Form Permohonan (<a href="{{asset('assets/undagi/syarat/1-blanko-permohonan.docx')}}" >download</a>)<br>
                  - KTP<br>
                  - Informasi Tata Ruang (ITR)<br>
                  - Kepemilikan lahan (SHM sesuai dengan KTP Pemohon)<br>
                  - Surat Kuasa Pengurusan (Apabila pemohon tidak mengurus langsung permohonannya, dengan melampirkan Kartu Keluarga) (<a href="{{asset('assets/undagi/syarat/2-surat-kuasa.docx')}}" >download</a>)
                </li><br>

                <li>Pemohonan akan mendapatkan respon oleh petugas berupa keterangan dan jadwal konsultasi setelah verifikasi.</li><br>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Permohonan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- text input -->
              <div class="form-group {{ $errors->has('alamat_rumah') ? ' has-error' : '' }}">
                <label class="control-label" for="alamat_rumah">Alamat Rumah</label>
                <input type="text" class="form-control" id="alamat_rumah" name="alamat_rumah" required="true" maxlength="255" value="{{old('alamat_rumah')}}">
                @if ($errors->has('alamat_rumah'))
                <span class="help-block">
                    <strong>{{ $errors->first('alamat_rumah') }}</strong>
                </span>
                @endif
              </div>
              <!-- text input -->
              <div class="form-group {{ $errors->has('telp') ? ' has-error' : '' }}">
                <label class="control-label" for="telp">HP / Telp</label>
                <input type="tel" class="form-control" id="telp" name="telp" required="true" maxlength="50" value="{{old('telp')}}">
                @if ($errors->has('telp'))
                <span class="help-block">
                    <strong>{{ $errors->first('telp') }}</strong>
                </span>
                @endif
              </div>
              <!-- text input -->
              <div class="form-group {{ $errors->has('lokasi_bangunan') ? ' has-error' : '' }}">
                <label class="control-label" for="lokasi_bangunan">Lokasi Bangunan</label>
                <input type="text" class="form-control" id="lokasi_bangunan" name="lokasi_bangunan" required="true" maxlength="255" value="{{old('lokasi_bangunan')}}">
                @if ($errors->has('lokasi_bangunan'))
                <span class="help-block">
                    <strong>{{ $errors->first('lokasi_bangunan') }}</strong>
                </span>
                @endif
              </div>

              {{-- splitter --}}
              
              <!-- text input -->
              <div class="form-group {{ $errors->has('no_ajb') ? ' has-error' : '' }}">
                <label class="control-label" for="no_ajb">No Akta Jual Beli / Sertifikat</label>
                <input type="text" class="form-control" id="no_ajb" name="no_ajb" required="true" maxlength="255" value="{{old('no_ajb')}}">
                @if ($errors->has('no_ajb'))
                <span class="help-block">
                    <strong>{{ $errors->first('no_ajb') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('tgl_ajb') ? ' has-error' : '' }}">
                <label class="control-label" for="tgl_ajb">Tanggal Akta Jual Beli / Sertifikat</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tgl_ajb" value="{{old('tgl_ajb')}}">
                </div>
                @if ($errors->has('tgl_ajb'))
                <span class="help-block">
                    <strong>{{ $errors->first('tgl_ajb') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('an_ajb') ? ' has-error' : '' }}">
                <label class="control-label" for="an_ajb">a/n (sesuai Akta Jual Beli / Sertifikat)</label>
                <input type="text" class="form-control" id="an_ajb" name="an_ajb" required="true" maxlength="100" value="{{old('an_ajb')}}">
                @if ($errors->has('an_ajb'))
                <span class="help-block">
                    <strong>{{ $errors->first('an_ajb') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('letak_ajb') ? ' has-error' : '' }}">
                <label class="control-label" for="letak_ajb">Terletak di (sesuai Akta Jual Beli / Sertifikat)</label>
                <input type="text" class="form-control" id="letak_ajb" name="letak_ajb" required="true" maxlength="255" value="{{old('letak_ajb')}}">
                @if ($errors->has('letak_ajb'))
                <span class="help-block">
                    <strong>{{ $errors->first('letak_ajb') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('luas_ajb') ? ' has-error' : '' }}">
                <label class="control-label" for="luas_ajb">Luas dalam m<sup>2</sup> (sesuai Akta Jual Beli / Sertifikat)</label>
                <input type="number" class="form-control" id="luas_ajb" name="luas_ajb" required="true" maxlength="10" value="{{old('luas_ajb')}}">
                @if ($errors->has('luas_ajb'))
                <span class="help-block">
                    <strong>{{ $errors->first('luas_ajb') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('doc_ktp') ? ' has-error' : '' }}">
                <label class="control-label" for="doc_ktp">Upload Scan KTP</label>
                <input type="file" class="form-control" id="doc_ktp" name="doc_ktp" required="true">
                @if ($errors->has('doc_ktp'))
                <span class="help-block">
                    <strong>{{ $errors->first('doc_ktp') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('doc_itr') ? ' has-error' : '' }}">
                <label class="control-label" for="doc_itr">Upload Dokumen ITR</label>
                <input type="file" class="form-control" id="doc_itr" name="doc_itr" required="true">
                @if ($errors->has('doc_itr'))
                <span class="help-block">
                    <strong>{{ $errors->first('doc_itr') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('doc_shm') ? ' has-error' : '' }}">
                <label class="control-label" for="doc_shm">Upload Dokumen SHM</label>
                <input type="file" class="form-control" id="doc_shm" name="doc_shm" required="true">
                @if ($errors->has('doc_shm'))
                <span class="help-block">
                    <strong>{{ $errors->first('doc_shm') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('doc_kuasa') ? ' has-error' : '' }}">
                <label class="control-label" for="doc_kuasa">Upload Surat Kuasa (jika pemohon tidak mengurus langsung)</label>
                <input type="file" class="form-control" id="doc_kuasa" name="doc_kuasa">
                @if ($errors->has('doc_kuasa'))
                <span class="help-block">
                    <strong>{{ $errors->first('doc_kuasa') }}</strong>
                </span>
                @endif
              </div>
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a type="button" class="btn btn-danger" href="{{url('admin/admin')}}">Kembali</a>
              <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</div>

<!-- bootstrap datepicker -->
<script src="{{asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>

<script>
  $(function(){
    $('#permohonan-menu').addClass('active');

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  });
</script>
@endsection