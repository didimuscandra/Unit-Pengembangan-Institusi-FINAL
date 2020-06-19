<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatur;
use App\Kegiatan;
use App\Perolehan;
use DB;

class dashboardController extends Controller
{
    public function index()
    {
        //coba bntr wkkw
        $grafik = DB::table('perolehans')
                  ->select(DB::raw("DATE_FORMAT(tgl_donasi,'%M') as period, SUM(total_donasi) as SiteA"))
                  ->orderBy('tgl_donasi','ASC')->groupBy('period')->get();
   
        $donaturs = Donatur::count();
        $kegiatans = Kegiatan::count();
        $perolehans = Perolehan::sum('total_donasi');
        return view('layouts.dashboard',array('donaturs' => $donaturs, 'kegiatans' => $kegiatans, 'perolehans' => $perolehans,'grafik' => $grafik));
    }
}
