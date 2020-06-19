<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use PDF;


class kegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('Kegiatan.index',compact('kegiatans'));
    }

    public function vcreate()
    {
        return view('Kegiatan.create');
    }
    public function create(Request $req)
    {
        $kegiatans = new Kegiatan;
        $kegiatans ->namaKegiatan = $req->input('namaKegiatan');
        $kegiatans ->tgl_mulai = $req->input('tgl_mulai');
        $kegiatans ->tgl_selesai = $req->input('tgl_selesai');
        $kegiatans ->tempat = $req->input('tempat');
        $kegiatans ->rencana_donasi = $req->input('rencana_donasi');
        $kegiatans ->save();
        return redirect('/kegiatan');
    }

    public function vedit($id)
    {
        $kegiatans = Kegiatan::Find($id);
        return view('Kegiatan.edit',['Kegiatan' => $kegiatans]);
    }

    public function edit(Request $req, $id )
    {
        $kegiatans = Kegiatan::Find($id);
        $kegiatans ->namaKegiatan = $req->input('namaKegiatan');
        $kegiatans ->tgl_mulai = $req->input('tgl_mulai');
        $kegiatans ->tgl_selesai = $req->input('tgl_selesai');
        $kegiatans ->tempat = $req->input('tempat');
        $kegiatans ->rencana_donasi = $req->input('rencana_donasi');
        $kegiatans ->save();
        return redirect('/kegiatan');
    }
    public function delete($id)
    {
        $kegiatans = Kegiatan::Find($id);
        $kegiatans ->delete();
        return redirect()->back();
    }

    public function makeReport(Request $request){
        $kegiatans = Kegiatan::all();
 
    	$pdf = PDF::loadview('Kegiatan.pdf',['kegiatans'=>$kegiatans]);
    	return $pdf->download('laporan-kegiatan-pdf');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $kegiatans = Kegiatan::where('namaKegiatan','LIKE','%'.$cari.'%')->paginate(10);
        return view('Kegiatan.index', compact('kegiatans'));
    }
}
