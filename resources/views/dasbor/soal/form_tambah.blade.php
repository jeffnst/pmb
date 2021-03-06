@extends('dasbor.layouts.main')

@section('title')
Dasbor &raquo; Soal &raquo; Form Tambah Data Soal
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Form Tambah Data Soal</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <ul class="breadcrumb">
            <li><a href="/dasbor">Dasbor</a></li>
            <li><a href="/dasbor/soal">Data Soal</a></li>
            <li class="active">Form Tambah Data Soal</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Data Soal
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/dasbor/soal/simpan" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group {{$errors->has('kode_jenis_ujian') ? ' has-error' : ''}}">
                                        <label class="control-label">Jenis Ujian</label>
                                        <select name="kode_jenis_ujian" class="form-control" id="kode-jenis-ujian">
                                            <option value="">-- Pilih jenis ujian --</option>
                                            @foreach($jenisujian as $item)
                                                <option value="{{ $item->kode }}" {{ ($item->kode == old('kode_jenis_ujian')) ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('kode_jenis_ujian'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('kode_jenis_ujian') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group {{$errors->has('kode_mata_kuliah') ? ' has-error' : ''}}">
                                        <label class="control-label">Mata Kuliah</label>
                                        <select name="kode_mata_kuliah" class="form-control" id="kode-mata-kuliah">
                                            <option value="">-- Pilih mata kuliah --</option>
                                            @foreach($matakuliah as $item)
                                                <option value="{{ $item->kode }}" {{ ($item->kode == old('kode_mata_kuliah')) ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('kode_mata_kuliah'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('kode_mata_kuliah') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-xs-12">
                                    <div class="form-group {{$errors->has('kode_kelas') ? ' has-error' : ''}}">
                                        <label class="control-label">Kelas</label>
                                        <select name="kode_kelas" class="form-control" id="kode-kelas">
                                            <option value="">-- Pilih kelas --</option>
                                            @foreach($kelas as $item)
                                                <option value="{{ $item->kode }}" {{ ($item->kode == old('kode_kelas')) ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('kode_kelas'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('kode_kelas') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group {{$errors->has('kode_tahun_ajaran') ? ' has-error' : ''}}">
                                        <label class="control-label">Tahun Ajaran</label>
                                        <select name="kode_tahun_ajaran" class="form-control" class="kode-tahun-ajaran" id="kode-tahun-ajaran">
                                            <option value="">-- Pilih tahun ajaran --</option>
                                            @foreach($tahunajaran as $item)
                                                <option value="{{ $item->kode }}" {{ ($item->kode == old('kode_tahun_ajaran')) ? 'selected' : '' }}>
                                                    @if($item->semester == 1)
                                                        {{ $item->tahun }} - Ganjil
                                                    @else
                                                        {{ $item->tahun }} - Genap
                                                    @endif
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('kode_tahun_ajaran'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('kode_tahun_ajaran') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <div class="form-group {{$errors->has('nip') ? ' has-error' : ''}}">
                                        <label class="control-label">Dosen</label>
                                        <select name="nip" class="form-control">
                                            <option value="">-- Pilih dosen --</option>
                                            @foreach($dosen as $item)
                                                <option value="{{ $item->nip }}" {{ ($item->nip == old('nip')) ? 'selected' : '' }}>
                                                    {{ $item->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('nip'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('nip') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <div class="form-group {{ $errors->has('kode') ? ' has-error' : ''}}">
                                        <label class="control-label">Kode Soal</label>
                                        <input type="text" name="kode" class="form-control" id="kode-soal" readonly value="{{ old('kode') }}" />
                                        @if($errors->has('kode'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('kode') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group {{ $errors->has('sifat_ujian') ? ' has-error' : ''}}">
                                        <label class="control-label">Sifat Ujian</label>
                                        <input type="text" name="sifat_ujian" class="form-control" value="{{ old('sifat_ujian') }}" />
                                        @if($errors->has('sifat_ujian'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('sifat_ujian') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group {{$errors->has('tanggal_ujian') ? ' has-error' : ''}}">
                                        <label class="control-label">Tanggal Ujian</label>
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type="text" name="tanggal_ujian" class="form-control" value="{{ old('tanggal_ujian') }}" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                        @if($errors->has('tanggal_ujian'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('tanggal_ujian') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group {{$errors->has('durasi_ujian') ? ' has-error' : ''}}">
                                        <label class="control-label">Durasi Ujian</label>
                                        <input type="number" name="durasi_ujian" class="form-control" value="{{ old('durasi_ujian') }}" />
                                        @if($errors->has('durasi_ujian'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('durasi_ujian') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <div class="form-group {{$errors->has('jumlah_pertanyaan') ? ' has-error' : ''}}">
                                        <label class="control-label">Jumlah Pertanyaan</label>
                                        <input type="number" name="jumlah_pertanyaan" class="form-control" value="{{ old('jumlah_pertanyaan') }}" />
                                        @if($errors->has('jumlah_pertanyaan'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('jumlah_pertanyaan') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                            <a href="/dasbor/soal" class="btn btn-default"><i class="fa fa-times"></i> Batal</a>
                        </form>
                    </div>
                    <!-- /.col-lg-12 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/id.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>
$(document).ready(function(){
    $('#datetimepicker1').datetimepicker({
        locale: 'id',
        format:'DD-MM-YYYY HH:mm:ss',
    });
    $('#kode-jenis-ujian').change(function(){
        var kode_jenis_ujian    = $('#kode-jenis-ujian').val();
        var kode_mata_kuliah    = $('#kode-mata-kuliah').val();
        var kode_kelas          = $('#kode-kelas').val();
        var kode_tahun_ajaran   = $('#kode-tahun-ajaran').val();
        var kode_soal           = kode_jenis_ujian+kode_mata_kuliah+kode_kelas+kode_tahun_ajaran;
        $('#kode-soal').val(kode_soal);
    });
    $('#kode-mata-kuliah').change(function(){
        var kode_jenis_ujian    = $('#kode-jenis-ujian').val();
        var kode_mata_kuliah    = $('#kode-mata-kuliah').val();
        var kode_kelas          = $('#kode-kelas').val();
        var kode_tahun_ajaran   = $('#kode-tahun-ajaran').val();
        var kode_soal           = kode_jenis_ujian+kode_mata_kuliah+kode_kelas+kode_tahun_ajaran;
        $('#kode-soal').val(kode_soal);
    });
    $('#kode-kelas').change(function(){
        var kode_jenis_ujian    = $('#kode-jenis-ujian').val();
        var kode_mata_kuliah    = $('#kode-mata-kuliah').val();
        var kode_kelas          = $('#kode-kelas').val();
        var kode_tahun_ajaran   = $('#kode-tahun-ajaran').val();
        var kode_soal           = kode_jenis_ujian+kode_mata_kuliah+kode_kelas+kode_tahun_ajaran;
        $('#kode-soal').val(kode_soal);
    });
    $('#kode-tahun-ajaran').change(function(){
        var kode_jenis_ujian    = $('#kode-jenis-ujian').val();
        var kode_mata_kuliah    = $('#kode-mata-kuliah').val();
        var kode_kelas          = $('#kode-kelas').val();
        var kode_tahun_ajaran   = $('#kode-tahun-ajaran').val();
        var kode_soal           = kode_jenis_ujian+kode_mata_kuliah+kode_kelas+kode_tahun_ajaran;
        $('#kode-soal').val(kode_soal);
    });
});
</script>
@endpush
