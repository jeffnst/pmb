<?php

namespace App\Services;

class CalonMahasiswaKelengkapanService
{
    public function handleUploadGambar($fileGambar, $namaGambar)
    {
        $uploadGambar = $fileGambar
            ->move(public_path('/uploads/pmb/pendaftaran/kelengkapan'), $namaGambar);
    }

    public function handleDeleteGambar($namaGambar)
    {
        $deleteFileGambar = unlink(public_path('/uploads/pmb/pembayaran/'.$namaGambar));
    }
}
