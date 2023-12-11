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
        try {
            // Validasi data permintaan
            $request->validate([
                'kodepegawai' => 'required|max:5|unique:karyawan,kodepegawai',
                'namalengkap' => 'required|max:50',
                'divisi' => 'required|max:20',
                'departemen' => 'required|max:20',
            ]);

            // Insert data ke tabel karyawan
            DB::table('karyawan')->insert([
                'kodepegawai' => $request->kodepegawai,
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen
            ]);

            return redirect('/karyawan')->with('success', 'Karyawan berhasil ditambahkan');
        } catch (QueryException $e) {
            if ($e->getCode() == '23000') {
                dd($e->getMessage());
                return redirect('/karyawan')->with('error', 'Kode Pegawai sudah ada. Silakan masukkan kode pegawai yang berbeda.');
            }

            // Jika bukan error Duplicate entry, lempar kembali exception
            throw $e;
        }
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
