<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => "intan", 'foto' => 'E020322098.jpeg'];
        $prodi = Prodi::all();
        //dd($prodi);// mencek data
        return view('prodi.index', compact(['data', 'prodi']));
    }
    public function show($id)
    {

    }

    public function tambah()
    {
        $data = ['nama' => "intan", 'foto' => 'E020322098.jpeg'];
        return view('prodi.tambahprodi', compact(['data']));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
            [
                'nama_prodi.required' => 'Nama Prodi wajib diisi',
                'nama_prodi.unique' => 'Nama Prodi sudah ada',
                'nama_prodi.max' => 'Nama Prodi maksimal 255 karakter'
            ]
        );
        Prodi::create($validateData);
        return redirect('prodi');
    }

    public function edit(string $id)
    {
        $data = ['nama' => "intan", 'foto' => 'E020322098.jpeg'];
        $prodi = Prodi::find($id);
        return view('prodi.editprodi', compact(['data', 'prodi']));
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
            [
                'nama_prodi.required' => 'Nama Prodi wajib diisi',
                'nama_prodi.unique' => 'Nama Prodi sudah ada',
                'nama_prodi.max' => 'Nama Prodi maksimal 255 karakter'
            ]
        );
        Prodi::where('id', $id)->update($validateData);
        return redirect('/prodi');
    }

    public function destroy(string $id)
    {
        Prodi::destroy($id);
        return redirect('/prodi');
    }

}
