<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use PDF;

class pesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertas = Peserta::all();
        return view('Peserta.index',compact('pesertas'));
    }

    public function vcreate()
    {
        return view('Peserta.create');
    }
    public function create(Request $req)
    {
        $pesertas = new Peserta;
        $pesertas ->namaPeserta = $req->input('namaPeserta');
        $pesertas ->tempatLahir = $req->input('tempatLahir');
        $pesertas ->tglLahir = $req->input('tglLahir');
        $pesertas ->gender = $req->input('gender');
        $pesertas ->alamat = $req->input('alamat');
        $pesertas ->pekerjaan = $req->input('pekerjaan');
        $pesertas ->save();
        return redirect('/peserta');
        // return "aaaa";
    }

    public function vedit($id)
    {
        $pesertas = Peserta::Find($id);
        return view('Peserta.edit',['Peserta' => $pesertas]);
    }

    public function edit(Request $req, $id )
    {
        $pesertas = Peserta::Find($id);
        $pesertas ->namaPeserta = $req->input('namaPeserta');
        $pesertas ->tempatLahir = $req->input('tempatLahir');
        $pesertas ->tglLahir = $req->input('tglLahir');
        $pesertas ->gender = $req->radio('gender');
        $pesertas ->alamat = $req->input('alamat');
        $pesertas ->pekerjaan = $req->input('pekerjaan');
        // echo $jadwal ->judul_ibadah;
        $pesertas ->save();
        return redirect('/peserta');
    }
    public function delete($id)
    {
        $pesertas = Peserta::Find($id);
        $pesertas ->delete();
        return redirect()->back();
    }

    public function makeReport(Request $request){
        $pesertas = Peserta::all();
 
    	$pdf = PDF::loadview('Peserta.pdf',['pesertas'=>$pesertas]);
    	return $pdf->download('laporan-peserta-pdf');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pesertas = Peserta::where('namaPeserta','LIKE','%'.$cari.'%')->paginate(10);
        return view('Peserta.index', compact('pesertas'));
    }
}
