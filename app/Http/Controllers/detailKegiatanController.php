<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Peserta;
use App\DetailKegiatan;
use DB;
use PDF;

class detailKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailkegiatans = DB::Table('detail_kegiatans')
                    ->join('kegiatans','kegiatans.id','=','detail_kegiatans.kegiatan_id')
                    ->join('pesertas','pesertas.id','=','detail_kegiatans.peserta_id')
                    ->get();
                    
        return view('DetailKegiatan.index',[ 'detailkegiatans' => $detailkegiatans]);
    }

    public function vcreate()
    {
        $kegiatans = Kegiatan::orderBy('namaKegiatan','asc')->get();
        $pesertas = Peserta::orderBy('namaPeserta','asc')->get();
        return view('DetailKegiatan.create')->with([
            'kegiatans'  => $kegiatans,
            'pesertas'  => $pesertas
        ]);
    }
    
    public function create(Request $req)
    {
        
        $detailkegiatans = new DetailKegiatan;
        $detailkegiatans ->kegiatan_id = $req->input('kegiatan_id');
        $detailkegiatans ->peserta_id = $req->input('peserta_id');
        $detailkegiatans ->save();
        return redirect('/detailkegiatan')->with('info','Detail Kegiatan Baru Telah Ditambahkan!');
        // return "aaaa";
    }

    public function vedit($id)
    {
        $detailkegiatans = DetailKegiatan::Find($id);
        $kegiatans = Kegiatan::orderBy('namaKegiatan','asc')->get();
        $pesertas = Peserta::orderBy('namaPeserta','asc')->get();
        return view('DetailKegiatan.edit')->with([
            'detailkegiatans' => $detailkegiatans,
            'kegiatans'  => $kegiatans,
            'pesertas'  => $pesertas,
        ]);
    }

    public function edit(Request $req, $id )
    {
        $detailkegiatans = DetailKegiatan::Find($id);
        $detailkegiatans ->kegiatan_id = $req->input('kegiatan_id');
        $detailkegiatans ->peserta_id = $req->input('peserta_id');
        $detailkegiatans ->save();
        return redirect('/detailkegiatan')->with('info','Detail Kegiatan Baru Telah Di Edit!');
        // return "aaaa";
    }
    public function delete($id)
    {
        $detailkegiatans = DetailKegiatan::Find($id);
        $detailkegiatans ->delete();
        return redirect()->back();
    }

    public function makeReport(Request $request){
        $detailkegiatans = DB::Table('detail_kegiatans')
                    ->join('kegiatans','kegiatans.id','=','detail_kegiatans.kegiatan_id')
                    ->join('pesertas','pesertas.id','=','detail_kegiatans.peserta_id')
                    ->get();
 
    	$pdf = PDF::loadview('DetailKegiatan.pdf',['detailkegiatans' => $detailkegiatans]);
    	return $pdf->download('laporan-detailkegiatan-pdf');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $detailkegiatans = DetailKegiatan::where('namaKegiatan','LIKE','%'.$cari.'%')
                        ->join('kegiatans','kegiatans.id','=','detail_kegiatans.kegiatan_id')
                        ->join('pesertas','pesertas.id','=','detail_kegiatans.peserta_id')
                        ->get();
        return view('DetailKegiatan.index', compact('detailkegiatans'));
    }
}
