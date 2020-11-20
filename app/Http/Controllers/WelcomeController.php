<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index(){
        return 
        $message = "<p>
        <b>ini adalah rest api yang dibangun  dengan lumen</b>
        <br>
        gunakan Aplikasi Postman/insomnia untuk<br>
        registrasi http://localhost:8000/registrasi<br>
        login di http://localhost:8000/login
        <br><br><br>
        Daftar Route -> <br>
            Absen di  http://localhost:8000/absen <br>
            Absen Subuh di  http://localhost:8000/absensubuh <br>
            Acara di  http://localhost:8000/acara <br>
            Guru di  http://localhost:8000/guru <br>
            Kalender Akademik di  http://localhost:8000/kalender <br>
            Kas di  http://localhost:8000/kas <br>
            Kelas di  http://localhost:8000/kelas <br>
            Kelompok Subuh di  http://localhost:8000/klmpsubuh <br>
            Kriteria Penilaian Quran di  http://localhost:8000/kriteralquran <br>
            Nilai di  http://localhost:8000/nilai <br>
            Nilai Quran di  http://localhost:8000/nquran <br>
            Ortu di  http://localhost:8000/ortu <br>
            Pelajaran di  http://localhost:8000/pelajaran <br>
            Pelanggaran di  http://localhost:8000/pelanggaran <br>
            Tunggakan di  http://localhost:8000/tunggakan <br>
            Photo di  http://localhost:8000/photo <br>
            Siswa Baru di  http://localhost:8000/siswabaru <br>
            Data Siswa di  http://localhost:8000/siswa <br>
            Uang Keluar di  http://localhost:8000/ukeluar <br>
            Uang Masuk di  http://localhost:8000/umasuk <br>
        </p>";
    }
}
