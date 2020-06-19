@extends('layouts.home')
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Perolehan</h4> 
    </div>
</div>
<form action="/perolehan/cari" method="GET" role="search" class="app-search hidden-xs">
    <input type="text" name="cari" placeholder="Search..." class="form-control" value="{{old('cari')}}">
    <input type="Submit" value="Search">
</form>
<br/>

<a href="/perolehan/create" class="btn btn-info" role="button">Tambahkan Perolehan</a> <a href="/perolehan/pdf" class="btn btn-info" target="_blank" role="button">Cetak PDF</a>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <center><h3 class="box-title">Daftar Perolehan</h3></center>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Donatur</th>
                            <th>Kegiatan</th>
                            <th>Tanggal Donasi</th>
                            <th>Jenis Donasi</th>
                            <th>Jumlah Donasi</th>
                            <th>Nilai</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($perolehans as $perolehan)
                        <tr>
                            <td>{{ $perolehan->nama_donatur }}</td>
                            <td>{{ $perolehan->namaKegiatan }}</td>
                            <td>{{ $perolehan->tgl_donasi }}</td>
                            <td>{{ $perolehan->nama_donasi }}</td>
                            <td>{{ $perolehan->jml_donasi }}</td>
                            <td>@currency($perolehan->total_donasi)</td>
                            <td><a href="perolehan/delete/{{$perolehan->perolehan_id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            <td><a href="perolehan/edit/{{$perolehan->perolehan_id}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>        
@endsection()

                        