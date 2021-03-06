@extends('keuangan.layouts.main')

@section('title')
Panitia &raquo; PMB &raquo; Form Tambah Data Gelombang
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Form Tambah Data Gelombang</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <ul class="breadcrumb">
            <li><a href="/dosen">Panitia</a></li>
            <li><a href="/dosen/soal">Data Soal</a></li>
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
                        <form action="/keuangan/biaya/simpan" method="post">
                            @csrf
                            <div class="form-group {{ $errors->has('kelas') ? ' has-error' : ''}}">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">Kelas</label>
                                        <select name="kelas" class="form-control">
                                            <option value="Kelas Pagi" {{ old('kelas') == "Gelombang 1" ? "selected" : "" }}>Kelas Pagi</option>
                                            <option value="Kelas Sore" {{ old('kelas') == "Gelombang 2" ? "selected" : "" }}>Kelas Sore</option>
                                            <option value="Kelas Eksekutif" {{ old('kelas') == "Gelombang 3" ? "selected" : "" }}>Kelas Eksekutif</option>
                                        </select>
                                        @if($errors->has('kelas'))
                                            <p class="text-danger">
                                                <i>{{ $errors->first('kelas') }}</i>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                            <a href="/dosen/soal" class="btn btn-default"><i class="fa fa-times"></i> Batal</a>
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
