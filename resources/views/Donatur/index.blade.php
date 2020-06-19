@extends('layouts.home')
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Donatur</h4> 
    </div>
</div>
<form action="/donatur/cari" method="GET" role="search" class="app-search hidden-xs">
    <input type="text" name="cari" placeholder="Search..." class="form-control" value="{{old('cari')}}">
    <input type="Submit" value="Search">
</form>
<br/>

<a href="/donatur/create" class="btn btn-info" role="button">Tambahkan Donatur</a> 
<a href="/donatur/pdf" class="btn btn-info" target="_blank" role="button">Cetak PDF</a>
<br><br>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <center><h3 class="box-title">Daftar Donatur</h3></center>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Donatur</th>
                            <th>Nama Donatur</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Email</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($donaturs as $donatur)
                        <tr>
                            <td>{{$donatur->jenisDonatur}}</td>
                            <td>{{$donatur->nama_donatur }}</td>
                            <td>{{ $donatur->alamat }}</td>
                            <td>{{ $donatur->no_hp }}</td>
                            <td>{{ $donatur->email }}</td>
                            <td><a href="donatur/delete/{{$donatur->donatur_id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            <td><a href="donatur/edit/{{$donatur->donatur_id}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>        
@endsection()

                        