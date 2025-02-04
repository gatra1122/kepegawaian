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
    public function store(Request $request){
        $request->validate([
            'nip' => 'required|string|max:20|unique:employees,nip',
            'nama' => 'required|string|max:255',
            'position' => 'required|string|max:100',
            'department' => 'required|string|max:100',
        ]);

        $employee = Employee::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'position' => $request->position,
            'department' => $request->department,
            'join_date' => now(),
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Berhasil menambahkan !');
    }
}
