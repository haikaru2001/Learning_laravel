<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function profile() {
        return view('profile',[
            "title" => "Profile",
            "user" => "Admin",
            "email" => "admin123@gmail.com"
        ]);
    }

    public function mahasiswa() {
        $arrMahasiswa = ["M Haikal Fuady", "Udin Tadjudin", "Alif Zaky cakraunlimited", "Andi M Fikri", "El Thorr"];
        return view('mahasiswa',[
            "title" => "Mahasiswa"
        ])->with('mahasiswa', $arrMahasiswa);
    }

    public function dosen() {
        $arrDosen = ["Andi Purnomo", "Ahlijati Nuraminah", "Aliyah", "Sri Hartati", "Muhammad Ihsan Shiddiq"];
        return view('dosen',[
            "title" => "Dosen"
        ])->with('dosen', $arrDosen);
    }

    public function matkul() {
        $arrMatkul = ["Web Framework", "Mobile Programming", "Data Mining", "Citra Digital", "Karakter"];
        return view('matkul',[
            "title" => "Mata Kuliah",
            "judul" => "Mata Kuliah"
        ])->with('matkul', $arrMatkul);
    }

    public function dashboard() {
        return view('dashboard', [
            "title" => "Dashboard",
            "user" => "Admin"
        ]);
        
    }
}
