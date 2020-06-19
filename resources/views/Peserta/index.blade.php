@extends('layouts.home')
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Peserta</h4> 
    </div>
</div>

<form action="/peserta/cari" method="GET" role="search" class="app-search hidden-xs">
    <input type="text" name="cari" placeholder="Search..." class="form-control" value="{{old('cari')}}">
    <input type="Submit" value="Search">
</form>
<br/>
<a href="/peserta/create" class="btn btn-info" role="button">Tambahkan Peserta</a> 
<a href="/peserta/pdf" class="btn btn-info" target="_blank" role="button">Cetak PDF</a>

<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <center><h3 class="box-title">Daftar Peserta</h3></center>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Peserta</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pesertas as $peserta)
                        <tr>
                            <td>{{ $peserta->namaPeserta }}</td>
                            <td>{{ $peserta->tempatLahir }}</td>
                            <td>{{ $peserta->tglLahir }}</td>
                            <td>{{ $peserta->gender }}</td>
                            <td>{{ $peserta->alamat }}</td>
                            <td>{{ $peserta->pekerjaan }}</td>
                            <td><a href="peserta/delete/{{$peserta->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            <td><a href="peserta/edit/{{$peserta->id}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>        
@endsection()

                        