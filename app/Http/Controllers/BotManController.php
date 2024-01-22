<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {
            $pertanyaan = strtolower($message);
            if (Str::contains($pertanyaan, ['pendaftaran siswa', 'siswa baru'])) {
                $botman->reply('Silahkan isi formulir pendaftaran lengkapi dokumen (foto copy KK dan akte sertakan pas foto 2x3 4lembar 3x4 4 lembar)');
            } elseif (Str::contains($pertanyaan, ['program', 'akademik'])) {
                $botman->reply('Kami melayani jenjang PAUD usia 3-6 tahun dan jenjang TPA usia PAUD dan SD');
            } elseif (Str::contains($pertanyaan, ['fasilitas'])) {
                $botman->reply('Fasilitas gedung sekolah PAUD, ruang madrasah TPA dan mushola');
            } elseif (Str::contains($pertanyaan, ['menghubungi', 'guru', 'staff'])) {
                $botman->reply('Silahkan hubungi 08112347187');
            } elseif (Str::contains($pertanyaan, ['pengumuman', 'ruang', 'diskusi'])) {
                $botman->reply('Ada');
            } elseif (Str::contains($pertanyaan, ['acara', 'kegiatan'])) {
                $botman->reply('Di web.... FB KB Thoriqul Jannah');
            } elseif (Str::contains($pertanyaan, ['bantuan', 'beasiswa'])) {
                $botman->reply('Bantuan bagi anak yatim, dan tidak mampu sesuai kriteria yang ditentukan');
            } elseif (Str::contains($pertanyaan, ['panduan studi', 'kurikulum'])) {
                $botman->reply('Web.....');
            } elseif (Str::contains($pertanyaan, ['foto kegiatan', 'video kegiatan'])) {
                $botman->reply('Ada');
            } elseif (Str::contains($pertanyaan, ['pendaftaran ekstrakurikuler', 'daftar', 'ekstrakurikuler'])) {
                $botman->reply('Mengisi formulir pendaftaran ekstrakurikuler');
            } elseif (Str::contains($pertanyaan, ['informasi', 'kebijakan keamanan', 'kebijakan darurat', 'sekolah'])) {
                $botman->reply('Ada');
            } elseif (Str::contains($pertanyaan, ['prosedur', 'saluran komunikasi', 'orangtua', 'kekhawatiran', 'pertanyaan', 'perkembangan anak'])) {
                $botman->reply('grup wa');
            } else {
                $botman->reply("write 'hi' for testing...");
            }
        });

        $botman->listen();
    }
}
