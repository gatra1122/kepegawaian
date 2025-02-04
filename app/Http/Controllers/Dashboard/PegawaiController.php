<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Employees::get();
        return view('Dashboard.Pegawai.index', compact('pegawai'));
    }

    public function create(){
        return view('Dashboard.Pegawai.create');
    }

    public function store(Request $request){
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'position' => 'required',
            'department' => 'required',
            'salary' => 'required',
        ]);

        Employees::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'position' => $request->position,
            'department' => $request->department,
            'salary' => $request->salary,
            'join_date' => now(),
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Berhasil menambahkan !');
    }

    public function edit($id){
        $pegawai = Employees::find($id);
        return view('Dashboard.Pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'position' => 'required',
            'department' => 'required',
            'salary' => 'required',
        ]);

        $employee = Employees::findOrFail($id);

        $employee->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'position' => $request->position,
            'department' => $request->department,
            'salary' => $request->salary,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Berhasil mengupdate data pegawai!');
    }


    public function destroy($id)
    {
        $pegawai = Employees::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Berhasil dihapus !');
    }
}
