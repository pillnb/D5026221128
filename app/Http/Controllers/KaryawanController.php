<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	// $karyawan = DB::table('karyawan')->get();

        $karyawan = DB::table('karyawan')->get();

    	// mengirim data karyawan ke view index
    	return view('indexKaryawan',['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahKaryawan');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
        $request->validate([
            'kodepegawai' =>
                'required',
                'max:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|max:20',
            'departemen' => 'required|max:20',
        ]);

        // insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan')->with('success', 'Karyawan berhasil ditambahkan');

	}

	// method untuk hapus data karyawan
	public function hapus($kodepegawai)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
        //tdk return view karena redirect lebih singkat: melempar ke suatu url route karyawan, maka akan query all record
	}

}
