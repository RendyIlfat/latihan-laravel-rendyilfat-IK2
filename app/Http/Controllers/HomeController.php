<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function index()
//     {
//         return view('home');
//     }

//     public function about()
//     {
//         return view('about');
//     }

//     public function test($id = 0)
//     {
//         $nama = 'IK2';

//         return view('test', ['nama' => $nama, 'id' => $id]);
//     }
// }




// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class HomeController extends Controller
// {
//     public function index()
//     {
//         return view('home');
//     }

//     public function about()
//     {
//         return view('about');
//     }

//     public function tambah()
//     {
//         return view('input');
//     }

//     public function simpan(Request $request)
//     {
//         $nama = $request->input('nama');
//         $kategori = $request->input('kategori');
//         $harga = $request->input('harga');
//         $ket = $request->input('ket');

//         return view('result', [
//             'nama' => $nama,
//             'kategori' => $kategori,
//             'harga' => $harga,
//             'ket' => $ket,
//         ]);

//     }

//     public function test()
//     {
//         return 'masuk test';
//     }

// }







// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\Models\Makanan;
// use App\Models\Kategori;

// class HomeController extends Controller
// {
//     public function index()
//     {
//         return view('home');
//     }

//     public function about()
//     {
//         return view('about');
//     }

//     public function tambah()
//     {
//         return view('input');
//     }

//     public function simpan(Request $request)
//     {
//         $nama = $request->input('nama');
//         $kategori = $request->input('kategori');
//         $harga = $request->input('harga');
//         $ket = $request->input('ket');

//         return view('result', [
//             'nama' => $nama,
//             'kategori' => $kategori,
//             'harga' => $harga,
//             'ket' => $ket,
//         ]);

//     }



//     public function view_makanan()
//     {
//        $makanans = Makanan::all();

//         return view('makanan', [
//             'foods' => $makanans,
//         ]);
//     }

//     public function test_query_builder()
//     {
//         return 'masuk test';
//     }

//     public function test_eloquent()
//     {
//        $makanans = Makanan::all();

//        dd($makanans);

//        return 'masuk test';
//     }
// }




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Makanan;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}