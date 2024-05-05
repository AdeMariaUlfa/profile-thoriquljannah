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
            } elseif (Str::contains($pertanyaan, ['program akademik'])) {
                $botman->reply('Kami melayani jenjang PAUD usia 3-6 tahun dan jenjang TPA usia PAUD dan SD');
            } elseif (Str::contains($pertanyaan, ['fasilitas'])) {
                $botman->reply('Fasilitas gedung sekolah PAUD, ruang madrasah TPA dan mushola');
            } elseif (Str::contains($pertanyaan, ['menghubungi'])) {
                $botman->reply('Silahkan hubungi 08112347187');
            } elseif (Str::contains($pertanyaan, ['pengumuman', 'ruang diskusi', 'forum orang tua'])) {
                $botman->reply('Ada <a href="https://thoriqul-jannah.000webhostapp.com/berita" target="_blank">Berita</a>');
            } elseif (Str::contains($pertanyaan, ['acara'])) {
                $botman->reply('Di Web <a href="https://thoriqul-jannah.000webhostapp.com/berita" target="_blank">Thoriqul Jannah</a> FB KB Thoriqul Jannah');
            } elseif (Str::contains($pertanyaan, ['bantuan', 'beasiswa'])) {
                $botman->reply('Bantuan bagi anak yatim, dan tidak mampu sesuai kriteria yang ditentukan');
            } elseif (Str::contains($pertanyaan, ['panduan studi', 'kurikulum'])) {
                $botman->reply('Ada');
            } elseif (Str::contains($pertanyaan, ['foto kegiatan', 'video kegiatan'])) {
                $botman->reply('Ada Silahkan Akses Link Berikut <a href="https://thoriqul-jannah.000webhostapp.com/galeri" target="_blank">Galeri</a>');
            } elseif (Str::contains($pertanyaan, ['pendaftaran ekstrakurikuler'])) {
                $botman->reply('Mengisi formulir pendaftaran ekstrakurikuler');
            } elseif (Str::contains($pertanyaan, ['kebijakan keamanan'])) {
                $botman->reply('Ada');
            } elseif (Str::contains($pertanyaan, ['prosedur', 'saluran komunikasi'])) {
                $botman->reply('Group WA <a href="https://chat.whatsapp.com/LXEGgiXksMm3dk5exAJLnW" target="_blank">Link</a>');
            } else {
                $botman->reply("Apa ada pertanyaan lagi ?");
            }
        });

        $botman->listen();
    }
}
