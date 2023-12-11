<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
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
        $existKaryawan = DB::table('karyawan')
        ->where('kodepegawai', $request->kodepegawai)
        ->first();
        if ($existKaryawan) {
            return redirect('/karyawan')->with('error', 'Kode Pegawai sudah ada!');
    }

            // Insert data ke tabel karyawan
            DB::table('karyawan')->insert([
                'kodepegawai' => $request->kodepegawai,
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen
            ]);

            return redirect('/karyawan')->with('success', 'Data berhasil disimpan!');

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
