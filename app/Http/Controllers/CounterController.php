<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {
        // Mendapatkan jumlah pengunjung saat ini dari database
        $currentCount = DB::table('counter')->value('jumlah');

        // Menambah 1 ke jumlah pengunjung
        $newCount = $currentCount + 1;

        // Mengupdate nilai di database
        DB::table('counter')->update(['jumlah' => $newCount]);

        // Mengirim data counter ke view index
        return view('indexcounter', ['counter' => $newCount]);
    }
}
