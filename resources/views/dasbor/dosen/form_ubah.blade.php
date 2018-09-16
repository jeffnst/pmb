@extends('dasbor.layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Form Ubah Data Dosen</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <ul class="breadcrumb">
            <li><a href="/dasbor">Dasbor</a></li>
            <li><a href="/dasbor/dosen">Data Dosen</a></li>
            <li class="active">Form Tambah Data Dosen</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Data Dosen
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/dasbor/dosen/ubah/{{ $dosen->id }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put" />
                            <div class="form-group {{$errors->has('nip') ? ' has-error' : ''}}">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-xs-12">
                                        <label class="control-label" for="inputError">NIP</label>
                                        <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}" />
                                        @if($errors->has('nip'))
                                            <p class="text-danger">{{ $errors->first('nip') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <label class="control-label" for="inputError">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}" />
                                        @if($errors->has('nama'))
                                            <p class="text-danger">{{ $errors->first('nama') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-xs-12">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="">
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <label class="control-label" for="inputError">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{ $dosen->email }}" />
                                        @if($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label" for="inputError">Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="5">{{ $dosen->alamat }}</textarea>
                                        @if($errors->has('alamat'))
                                            <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Simpan</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
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
