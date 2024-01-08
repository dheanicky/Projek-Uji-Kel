<?php


namespace App\Http\Controllers;

use App\Models\letter_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LetterTypeController extends Controller
{
    public function index()
    {
        $letterType  = letter_type::get();
        return view('data_surat.index', compact('letterType'));
    }

    public function create()
    {
        return view('data_surat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_surat' => 'required|min:5',
            'klasifikasi_surat' => 'required',
        ]);

        $code = letter_type::count();

        letter_type::create([
            'letter_code' => $request->kode_surat. '-'. $code,
            'name_type' => $request->klasifikasi_surat,
        ]);

        return redirect()->route('letterType.index')->with('success', 'Berhasil menambahkan data Surat!');
    }

    public function edit($id)
    {
        $letterType = letter_type::find($id);
        return view('data_surat.edit', compact('letterType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_surat' => 'required',
            'klasifikasi_surat' => 'required',
        ]);

        $suratData = ([
            'letter_code' => $request->kode_surat,
            'name_type' => $request->klasifikasi_surat,
        ]);

        letter_type::where('id', $id)->update($suratData);

        return redirect()->route('letterType.index')->with('success', 'Berhasil mengubah data Surat!');
    }

    public function destroy($id)
    {
        letter_type::where('id', $id)->delete();
        return redirect()->route('letterType.index')->with('success', 'Berhasil menghapus data Surat!');
    }
}