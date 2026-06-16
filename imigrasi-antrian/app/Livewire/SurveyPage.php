<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Antrian;

class SurveyPage extends Component
{
    public $layanan;

    public $pasporBaru = [];

    public $pasporPenggantian = [];

    public $persyaratanTambahan = [];

    public $tambahanKhusus = [];

    public function mount($layanan)
    {
        $this->layanan = $layanan;

        /*
        |--------------------------------------------------------------------------
        | A = LAYANAN RAMAH HAM
        |--------------------------------------------------------------------------
        */

        if ($layanan == 'A') {

            /*
            |--------------------------------------------------------------------------
            | PASPOR BARU
            |--------------------------------------------------------------------------
            */

            $this->pasporBaru = [

                'E-KTP',

                'Kartu Keluarga',

                'Akta Kelahiran / Ijazah SD/SMP/SMA / Buku Nikah',

                'Surat Pengantar M-Paspor bagi yang mendaftar online',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR PENGGANTIAN
            |--------------------------------------------------------------------------
            */

            $this->pasporPenggantian = [

                'E-KTP',

                'Paspor Lama',

                'Surat Pengantar M-Paspor bagi yang mendaftar online',

                'Untuk paspor terbit sebelum 2009 dan/atau di luar negeri, wajib melampirkan KK dan Akta Kelahiran',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR ANAK <17 TAHUN
            |--------------------------------------------------------------------------
            */

            $this->persyaratanTambahan = [

                'E-KTP Orang Tua',

                'Kartu Keluarga',

                'Akta Kelahiran Anak',

                'Buku Nikah / Akta Perkawinan Orang Tua',

                'Paspor Orang Tua',

                'Paspor Lama Anak (bagi yang sudah memiliki)',

                'Surat Pernyataan & Jaminan Orang Tua (Materai 10.000)',

                'Surat Pengantar M-Paspor bagi yang mendaftar online',

            ];


            /*
            |--------------------------------------------------------------------------
            | CATATAN / PERSYARATAN KHUSUS
            |--------------------------------------------------------------------------
            */

            $this->tambahanKhusus = [

                'BST & Buku Pelaut (Awal Kapal)',

                'Rekom Travel Asli untuk Umroh',

                'Rekom Kemenag dan BPIH untuk Haji',

            ];
        }



        /*
        |--------------------------------------------------------------------------
        | B = LAYANAN VIP
        |--------------------------------------------------------------------------
        */

        elseif ($layanan == 'B') {

            /*
            |--------------------------------------------------------------------------
            | PASPOR BARU
            |--------------------------------------------------------------------------
            */

            $this->pasporBaru = [

                'E-KTP',

                'Kartu Keluarga',

                'Akta Kelahiran / Ijazah SD/SMP/SMA / Buku Nikah',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR PENGGANTIAN
            |--------------------------------------------------------------------------
            */

            $this->pasporPenggantian = [

                'E-KTP',

                'Paspor Lama',

                'Untuk paspor terbit sebelum 2009 dan/atau di luar negeri, wajib melampirkan KK dan Akta Kelahiran',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR ANAK <17 TAHUN
            |--------------------------------------------------------------------------
            */

            $this->persyaratanTambahan = [

                'E-KTP Orang Tua',

                'Kartu Keluarga',

                'Akta Kelahiran Anak',

                'Buku Nikah / Akta Perkawinan Orang Tua',

                'Paspor Orang Tua',

                'Paspor Lama Anak (bagi yang sudah memiliki)',

                'Surat Pernyataan & Jaminan Orang Tua (Materai 10.000)',

            ];


            /*
            |--------------------------------------------------------------------------
            | CATATAN / PERSYARATAN KHUSUS
            |--------------------------------------------------------------------------
            */

            $this->tambahanKhusus = [


                'BST & Buku Pelaut (Awal Kapal)',

                'Rekom Travel Asli untuk Umroh',

                'Rekom Kemenag dan BPIH untuk Haji',

            ];
        }



        /*
        |--------------------------------------------------------------------------
        | C = REGULER M-PASPOR
        |--------------------------------------------------------------------------
        */

        elseif ($layanan == 'C') {

            /*
            |--------------------------------------------------------------------------
            | PASPOR BARU
            |--------------------------------------------------------------------------
            */

            $this->pasporBaru = [

                'Surat Pengantar M-Paspor',

                'E-KTP',

                'Kartu Keluarga',

                'Akta Kelahiran / Ijazah SD/SMP/SMA / Buku Nikah',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR PENGGANTIAN
            |--------------------------------------------------------------------------
            */

            $this->pasporPenggantian = [

                'Surat Pengantar M-Paspor',

                'E-KTP',

                'Paspor Lama',

                'Untuk paspor terbit sebelum 2009 dan/atau di luar negeri, wajib melampirkan KK dan Akta Kelahiran',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR ANAK <17 TAHUN
            |--------------------------------------------------------------------------
            */

            $this->persyaratanTambahan = [

                'Surat Pengantar M-Paspor',

                'E-KTP Orang Tua',

                'Kartu Keluarga',

                'Akta Kelahiran Anak',

                'Buku Nikah / Akta Perkawinan Orang Tua',

                'Paspor Orang Tua',

                'Paspor Lama Anak (bagi yang sudah memiliki)',

                'Surat Pernyataan & Jaminan Orang Tua (Materai 10.000)',

            ];


            /*
            |--------------------------------------------------------------------------
            | CATATAN / PERSYARATAN KHUSUS
            |--------------------------------------------------------------------------
            */

            $this->tambahanKhusus = [


                'BST & Buku Pelaut (Awal Kapal)',

                'Rekom Travel Asli untuk Umroh',

                'Rekom Kemenag dan BPIH untuk Haji',

            ];
        }



        /*
        |--------------------------------------------------------------------------
        | D = LAYANAN BAP
        |--------------------------------------------------------------------------
        */

        else {

            /*
            |--------------------------------------------------------------------------
            | PASPOR HILANG
            |--------------------------------------------------------------------------
            */

            $this->pasporBaru = [

                'Surat Keterangan Hilang dari Kepolisian',

                'Salinan Data Paspor Lama',

                'E-KTP',

                'Kartu Keluarga',

                'Akta Kelahiran / Ijazah SD/SMP/SMA / Buku Nikah',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR RUSAK
            |--------------------------------------------------------------------------
            */

            $this->pasporPenggantian = [

                'E-KTP',

                'Kartu Keluarga',

                'Akta Kelahiran / Ijazah SD/SMP/SMA / Buku Nikah',

                'Paspor Rusak',

            ];


            /*
            |--------------------------------------------------------------------------
            | PASPOR RUSAK / HILANG ANAK <17 TAHUN
            |--------------------------------------------------------------------------
            */

            $this->persyaratanTambahan = [

                'E-KTP Orang Tua',

                'Kartu Keluarga',

                'Akta Kelahiran Anak',

                'Buku Nikah / Akta Perkawinan Orang Tua',

                'Paspor Orang Tua',

                'Surat Pernyataan & Jaminan Orang Tua (Materai 10.000)',

                'Surat Keterangan Hilang dari Kepolisian dan Salinan Data Paspor Lama bagi paspor hilang',

                'Paspor Rusak',

            ];


            /*
            |--------------------------------------------------------------------------
            | CATATAN / PERSYARATAN KHUSUS
            |--------------------------------------------------------------------------
            */

            $this->tambahanKhusus = [

                'BST & Buku Pelaut (Awal Kapal)',

                'Rekom Travel Asli untuk Umroh',

                'Rekom Kemenag dan BPIH untuk Haji',

            ];
        }
    }



    public function ambilAntrian()
    {
        $last = Antrian::where('kode', $this->layanan)
            ->latest()
            ->first();

        $nomor = $last ? $last->nomor + 1 : 1;

        $loket = in_array($this->layanan, ['A', 'B'])
            ? 'Loket 1'
            : 'Loket 2';

        $namaLayanan = match($this->layanan) {

            'A' => 'LAYANAN RAMAH HAM',

            'B' => 'LAYANAN VIP',

            'C' => 'REGULER M-PASPOR',

            'D' => 'LAYANAN BAP',

        };

        $antrian = Antrian::create([

            'kode'    => $this->layanan,

            'layanan' => $namaLayanan,

            'loket'   => $loket,

            'nomor'   => $nomor,

            'status'  => 'waiting',

        ]);

        return redirect()->route('ticket', [
            'id' => $antrian->id
        ]);
    }

    // BUAT PRINT
// public function ambilAntrian()
// {
//     $last = Antrian::where('kode', $this->layanan)
//         ->latest()
//         ->first();

//     $nomor = $last ? $last->nomor + 1 : 1;

//     $loket = in_array($this->layanan, ['A','B'])
//         ? 'Loket 1'
//         : 'Loket 2';

//     $namaLayanan = match($this->layanan) {
//         'A' => 'LAYANAN RAMAH HAM',
//         'B' => 'LAYANAN VIP',
//         'C' => 'REGULER M-PASPOR',
//         'D' => 'LAYANAN BAP',
//     };

//     $antrian = Antrian::create([
//         'kode'    => $this->layanan,
//         'layanan' => $namaLayanan,
//         'loket'   => $loket,
//         'nomor'   => $nomor,
//         'status'  => 'waiting',
//     ]);

//    $this->dispatch(
//     'print-ticket',

//     kode: $antrian->kode,
//     nomor: $antrian->nomor,
//     layanan: $antrian->layanan,
//     loket: $antrian->loket
// );
// }


//     public function render()
//     {
//         return view('livewire.survey-page');
//     }
}