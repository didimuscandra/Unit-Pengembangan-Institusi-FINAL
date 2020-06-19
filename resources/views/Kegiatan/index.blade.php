@extends('layouts.home')
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Kegiatan</h4> 
    </div>
</div>

<form action="/kegiatan/cari" method="GET" role="search" class="app-search hidden-xs">
    <input type="text" name="cari" placeholder="Search..." class="form-control" value="{{old('cari')}}">
    <input type="Submit" value="Search">
</form>
<br/>
<a href="/kegiatan/create" class="btn btn-info" role="button">Tambahkan Kegiatan</a> 
<a href="/kegiatan/pdf" class="btn btn-info" target="_blank" role="button">Cetak PDF</a>

<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <center><h3 class="box-title">Daftar Kegiatan</h3></center>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Tempat</th>
                            <th>Rencana Donasi</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($kegiatans as $kegiatan)
                        <tr>
                            <td>{{ $kegiatan->namaKegiatan }}</td>
                            <td>{{ $kegiatan->tgl_mulai }}</td>
                            <td>{{ $kegiatan->tgl_selesai }}</td>
                            <td>{{ $kegiatan->tempat }}</td>
                            <td> @currency($kegiatan->rencana_donasi)</td>
                            <td><a href="kegiatan/delete/{{$kegiatan->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            <td><a href="kegiatan/edit/{{$kegiatan->id}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>        
@endsection()

                        