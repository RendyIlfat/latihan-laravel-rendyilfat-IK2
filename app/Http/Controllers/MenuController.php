<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Query Builder 
use Illuminate\Support\Facades\DB;

// User Eloquent
use App\Models\Makanan;

class MenuController extends Controller
{
    public function index()
    {
        // Query Builder
        // $kategoris = DB::table('kategoris')->get();

        // Eloquent
        $makanans = Makanan::all();

        return view('menu', [
            'data' => $makanans,
        ]);
    }

    public function add()
    {
        return view ('form_makanan');
    }

    public function edit($id)
    {
        $makanan = Makanan::find($id);

        return view('form_makanan', [
            'data' => $makanan,
        ]);
    }

    public function save(Request $req)
    {
        // dd($req);

        $old_kode = @$req->old_kode;

        if ($old_kode) {
            // Mode Edit

            // Eloquent
            Makanan::where('kode_makanan', $old_kode)->update([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);

        } else {
            // Mode Add

            // Query Builder
            // DB::table('kategoris')->insert{[
            //     'kode_kategori' => $req->kode,
            //     'nama' => $req->nama,
            //     'ket' => $req->ket,
            // ]);

            // Eloquent 1 
            Makanan::create([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);

            // Eloquent 2
            // $kategori = new Kategori;
            // $kategori->kode_kategori = $req->kode;
            // $kategori->nama = $req->nama;
            // $kategori->ket = $req->ket;
            // $kategori->save();
        }

        return redirect('/menu');
    }

    public function delete($id)
    {
        // dd($id);

        // Query BUilder
        // DB::table('kategoris')->where('kode_kategori', $id)->delete();

        // Eloquent 1
        Makanan::find($id)->delete();

        // Eloquent 2
        // Kategori::where('kode_kategori', $id)->delete();

        return redirect('/menu');

    }
}
