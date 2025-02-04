<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        // $agenda = AgendaModel::orderBy('tanggal_mulai', 'desc')->get();
        // $tamu = TamuModel::where('status', 'belum ditindak')->get();

        // return view('dashboard.index', compact('agenda', 'tamu'));

        $pegawai = Employees::get();
        return view('Dashboard.Pegawai.index', compact('pegawai'));
    }

    public function create(){
        return view('Dashboard.Pegawai.create');
    }
    public function store(){

    }
}
