<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaDataController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.data-kandidat');
    }

    public function dataPemilih()
    {
        return view('pages.dashboard.data-pemilih');
    }

    public function tambahCalon()
    {
        return view('pages.dashboard.tambah-calon');
    }

    public function tambahPemilih()
    {
        return view('pages.dashboard.tambah-pemilih');
    }

    public function editPemilih()
    {
        return view('pages.dashboard.edit-pemilih');
    }

    public function editCalon()
    {
        return view('pages.dashboard.edit-calon');
    }
}
