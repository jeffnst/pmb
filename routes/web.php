<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::Routes();

Route::group(['prefix' => 'dasbor'], function() {
    Route::group(['prefix' => 'autentikasi'], function(){
        Route::get('/form-login', [
            'uses' => 'Dasbor\Autentikasi\AutentikasiController@formLogin',
            'as' => 'dasbor.autentikasi.form_login'
        ]);
        Route::post('/login', [
            'uses' => 'Dasbor\Autentikasi\AutentikasiController@login',
            'as' => 'dasbor.autentikasi.login'
        ]);
        Route::post('/logout', [
            'uses' => 'Dasbor\Autentikasi\AutentikasiController@logout',
            'as' => 'dasbor.autentikasi.logout'
        ]);
    });
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', [
            'uses'  => 'Dasbor\DasborController@index',
            'as'    => 'dasbor'
        ]);
        Route::group(['prefix' => 'dosen'], function(){
            Route::get('/', [
                'uses'  => 'Dasbor\DosenController@index',
                'as'    => 'dasbor.dosen'
            ]);
            Route::get('/form-tambah', [
                'uses'  => 'Dasbor\DosenController@create',
                'as'    => 'dasbor.dosen.form_tambah'
            ]);
            Route::get('/form-ubah/{id}', [
                'uses'  => 'Dasbor\DosenController@edit',
                'as'    => 'dasbor.dosen.form_ubah'
            ]);
            Route::get('/data', [
                'uses'  => 'Dasbor\DosenController@data',
                'as'    => 'dasbor.data.dosen'
            ]);
            Route::post('/simpan', [
                'uses'  => 'Dasbor\DosenController@store',
                'as'    => 'dasbor.dosen.simpan'
            ]);
            Route::put('/ubah/{id}', [
                'uses'  => 'Dasbor\DosenController@update',
                'as'    => 'dasbor.dosen.ubah'
            ]);
            Route::delete('/hapus/{id}', [
                'uses'  => 'Dasbor\DosenController@destroy',
                'as'    => 'dasbor.dosen.hapus'
            ]);
        });
        Route::group(['prefix' => 'mahasiswa'], function(){
            Route::get('/', [
                'uses'  => 'Dasbor\MahasiswaController@index',
                'as'    => 'dasbor.mahasiswa'
            ]);
            Route::get('/form-tambah', [
                'uses'  => 'Dasbor\MahasiswaController@create',
                'as'    => 'dasbor.mahasiswa.form_tambah'
            ]);
            Route::get('/form-ubah/{id}', [
                'uses'  => 'Dasbor\MahasiswaController@edit',
                'as'    => 'dasbor.mahasiswa.form_ubah'
            ]);
            Route::get('/data', [
                'uses'  => 'Dasbor\MahasiswaController@data',
                'as'    => 'dasbor.data.mahasiswa'
            ]);
            Route::post('/simpan', [
                'uses'  => 'Dasbor\MahasiswaController@store',
                'as'    => 'dasbor.mahasiswa.simpan'
            ]);
            Route::put('/ubah/{id}', [
                'uses'  => 'Dasbor\MahasiswaController@update',
                'as'    => 'dasbor.mahasiswa.ubah'
            ]);
            Route::delete('/hapus/{id}', [
                'uses'  => 'Dasbor\MahasiswaController@destroy',
                'as'    => 'dasbor.mahasiswa.hapus'
            ]);
        });
        Route::group(['prefix' => 'mata-kuliah'], function(){
            Route::get('/', [
                'uses'  => 'Dasbor\MataKuliahController@index',
                'as'    => 'dasbor.mata_kuliah'
            ]);
            Route::get('/form-tambah', [
                'uses'  => 'Dasbor\MataKuliahController@create',
                'as'    => 'dasbor.mata_kuliah.form_tambah'
            ]);
            Route::get('/form-ubah/{id}', [
                'uses'  => 'Dasbor\MataKuliahController@edit',
                'as'    => 'dasbor.mata_kuliah.form_ubah'
            ]);
            Route::get('/data', [
                'uses'  => 'Dasbor\MataKuliahController@data',
                'as'    => 'dasbor.data.mata_kuliah'
            ]);
            Route::post('/simpan', [
                'uses'  => 'Dasbor\MataKuliahController@store',
                'as'    => 'dasbor.mata_kuliah.simpan'
            ]);
            Route::put('/ubah/{id}', [
                'uses'  => 'Dasbor\MataKuliahController@update',
                'as'    => 'dasbor.mata_kuliah.ubah'
            ]);
            Route::delete('/hapus/{id}', [
                'uses'  => 'Dasbor\MataKuliahController@destroy',
                'as'    => 'dasbor.mata_kuliah.hapus'
            ]);
        });
        Route::group(['prefix' => 'tahun-ajaran'], function(){
            Route::get('/', [
                'uses'  => 'Dasbor\TahunAjaranController@index',
                'as'    => 'dasbor.tahun_ajaran'
            ]);
            Route::get('/form-tambah', [
                'uses'  => 'Dasbor\TahunAjaranController@create',
                'as'    => 'dasbor.tahun_ajaran.form_tambah'
            ]);
            Route::get('/form-ubah/{id}', [
                'uses'  => 'Dasbor\TahunAjaranController@edit',
                'as'    => 'dasbor.tahun_ajaran.form_ubah'
            ]);
            Route::get('/data', [
                'uses'  => 'Dasbor\TahunAjaranController@data',
                'as'    => 'dasbor.data.tahun_ajaran'
            ]);
            Route::post('/simpan', [
                'uses'  => 'Dasbor\TahunAjaranController@store',
                'as'    => 'dasbor.tahun_ajaran.simpan'
            ]);
            Route::put('/ubah/{id}', [
                'uses'  => 'Dasbor\TahunAjaranController@update',
                'as'    => 'dasbor.tahun_ajaran.ubah'
            ]);
            Route::delete('/hapus/{id}', [
                'uses'  => 'Dasbor\TahunAjaranController@destroy',
                'as'    => 'dasbor.tahun_ajaran.hapus'
            ]);
        });
        Route::group(['prefix' => 'kelas'], function(){
            Route::get('/', [
                'uses'  => 'Dasbor\KelasController@index',
                'as'    => 'dasbor.kelas'
            ]);
            Route::get('/form-tambah', [
                'uses'  => 'Dasbor\KelasController@create',
                'as'    => 'dasbor.kelas.form_tambah'
            ]);
            Route::get('/form-ubah/{id}', [
                'uses'  => 'Dasbor\KelasController@edit',
                'as'    => 'dasbor.kelas.form_ubah'
            ]);
            Route::get('/data', [
                'uses'  => 'Dasbor\KelasController@data',
                'as'    => 'dasbor.data.kelas'
            ]);
            Route::post('/simpan', [
                'uses'  => 'Dasbor\KelasController@store',
                'as'    => 'dasbor.kelas.simpan'
            ]);
            Route::put('/ubah/{id}', [
                'uses'  => 'Dasbor\KelasController@update',
                'as'    => 'dasbor.kelas.ubah'
            ]);
            Route::delete('/hapus/{id}', [
                'uses'  => 'Dasbor\KelasController@destroy',
                'as'    => 'dasbor.kelas.hapus'
            ]);
        });
        Route::group(['prefix' => 'jenis-ujian'], function(){
            Route::get('/', [
                'uses'  => 'Dasbor\JenisUjianController@index',
                'as'    => 'dasbor.jenis_ujian'
            ]);
            Route::get('/form-tambah', [
                'uses'  => 'Dasbor\JenisUjianController@create',
                'as'    => 'dasbor.jenis_ujian.form_tambah'
            ]);
            Route::get('/form-ubah/{id}', [
                'uses'  => 'Dasbor\JenisUjianController@edit',
                'as'    => 'dasbor.jenis_ujian.form_ubah'
            ]);
            Route::get('/data', [
                'uses'  => 'Dasbor\JenisUjianController@data',
                'as'    => 'dasbor.data.jenis_ujian'
            ]);
            Route::post('/simpan', [
                'uses'  => 'Dasbor\JenisUjianController@store',
                'as'    => 'dasbor.jenis_ujian.simpan'
            ]);
            Route::put('/ubah/{id}', [
                'uses'  => 'Dasbor\JenisUjianController@update',
                'as'    => 'dasbor.jenis_ujian.ubah'
            ]);
            Route::delete('/hapus/{id}', [
                'uses'  => 'Dasbor\JenisUjianController@destroy',
                'as'    => 'dasbor.jenis_ujian.hapus'
            ]);
        });
        Route::group(['prefix' => 'soal'], function(){
            Route::get('/', [
                'uses'  => 'Dasbor\SoalController@index',
                'as'    => 'dasbor.soal'
            ]);
            Route::get('/form-tambah', [
                'uses'  => 'Dasbor\SoalController@create',
                'as'    => 'dasbor.soal.form_tambah'
            ]);
            Route::get('/form-ubah/{id}', [
                'uses'  => 'Dasbor\SoalController@edit',
                'as'    => 'dasbor.soal.form_ubah'
            ]);
            Route::get('/data', [
                'uses'  => 'Dasbor\SoalController@data',
                'as'    => 'dasbor.data.soal'
            ]);
            Route::post('/simpan', [
                'uses'  => 'Dasbor\SoalController@store',
                'as'    => 'dasbor.soal.simpan'
            ]);
            Route::put('/ubah/{id}', [
                'uses'  => 'Dasbor\SoalController@update',
                'as'    => 'dasbor.soal.ubah'
            ]);
            Route::put('/aktifkan/{id}', [
                'uses'  => 'Dasbor\SoalController@updateToken',
                'as'    => 'dasbor.soal.aktifkan'
            ]);
            Route::delete('/hapus/{id}', [
                'uses'  => 'Dasbor\SoalController@destroy',
                'as'    => 'dasbor.soal.hapus'
            ]);
        });
        Route::group(['prefix' => 'pertanyaan'], function(){
            Route::get('/{kodesoal}', [
                'uses'  => 'Dasbor\PertanyaanController@index',
                'as'    => 'dasbor.pertanyaan'
            ]);
            Route::get('/{kodesoal}/data', [
                'uses'  => 'Dasbor\PertanyaanController@data',
                'as'    => 'dasbor.data.pertanyaan'
            ]);
            Route::get('/{kodesoal}/form-tambah', [
                'uses'  => 'Dasbor\PertanyaanController@create',
                'as'    => 'dasbor.pertanyaan.form_tambah'
            ]);
            Route::get('/{kodesoal}/form-ubah/{id}', [
                'uses'  => 'Dasbor\PertanyaanController@edit',
                'as'    => 'dasbor.pertanyaan.form_ubah'
            ]);
            Route::post('/{kodesoal}/simpan', [
                'uses'  => 'Dasbor\PertanyaanController@store',
                'as'    => 'dasbor.pertanyaan.simpan'
            ]);
            Route::put('/{kodesoal}/ubah/{id}', [
                'uses'  => 'Dasbor\PertanyaanController@update',
                'as'    => 'dasbor.pertanyaan.ubah'
            ]);
            Route::delete('/{kodesoal}/hapus/{id}', [
                'uses'  => 'Dasbor\PertanyaanController@destroy',
                'as'    => 'dasbor.pertanyaan.hapus'
            ]);
        });
    });
});

Route::group(['prefix' => 'mahasiswa'], function(){
    Route::group(['prefix' => 'autentikasi'], function(){
        Route::get('/form-login', [
            'uses' => 'Mahasiswa\Autentikasi\AutentikasiController@showFormLogin',
            'as' => 'mahasiswa.autentikasi.form_login'
        ]);
        Route::post('/login', [
            'uses' => 'Mahasiswa\Autentikasi\AutentikasiController@login',
            'as' => 'mahasiswa.autentikasi.login'
        ]);
        Route::post('/logout', [
            'uses' => 'Mahasiswa\Autentikasi\AutentikasiController@logout',
            'as' => 'mahasiswa.autentikasi.logout'
        ]);
    });
    Route::group(['middleware' => 'auth:mahasiswa'], function(){
        Route::get('/', [
            'uses' => 'Mahasiswa\MahasiswaController@index',
            'as' => 'mahasiswa.mahasiswa'
        ]);
        Route::group(['prefix' => 'ujian'], function(){
            Route::group(['prefix' => 'soal'], function(){
                Route::get('/', [
                    'uses' => 'Mahasiswa\SoalController@index',
                    'as' => 'mahasiswa.ujian'
                ]);
                Route::post('/cari', [
                    'uses' => 'Mahasiswa\SoalController@find',
                    'as' => 'mahasiswa.ujian.soal.cari'
                ]);
            });
        });
    });
});
