<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisDonatur;

class jenisDonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisdonaturs = JenisDonatur::all();
        return view('JenisDonatur.index',compact('jenisdonaturs'));
    }

    public function vcreate()
    {
        return view('JenisDonatur.create');
    }
    public function create(Request $req)
    {
        $jenisdonaturs = new JenisDonatur;
        $jenisdonaturs ->jenisDonatur = $req->input('jenisDonatur');
        $jenisdonaturs ->save();
        return redirect('/jenisdonatur');
        // return "aaaa";
    }

    public function vedit($id)
    {
        $jenisdonaturs = JenisDonatur::Find($id);
        return view('JenisDonatur.edit',['JenisDonatur' => $jenisdonaturs]);
    }

    public function edit(Request $req, $id )
    {
        $jenisdonaturs = JenisDonatur::Find($id);
        $jenisdonaturs ->jenisDonatur = $req->input('jenisDonatur');
        $jenisdonaturs ->save();
        return redirect('/jenisdonatur');
    }
    public function delete($id)
    {
        $jenisdonaturs = JenisDonatur::Find($id);
        $jenisdonaturs ->delete();
        return redirect()->back();
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $jenisdonaturs = JenisDonatur::where('jenisDonatur','LIKE','%'.$cari.'%')->paginate(10);
        return view('JenisDonatur.index', compact('jenisdonaturs'));
    }
}
