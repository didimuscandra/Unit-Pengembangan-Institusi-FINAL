@extends('layouts.home')
@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Jenis Donatur</h4> 
    </div>
</div>
<form action="/jenisdonatur/cari" method="GET" role="search" class="app-search hidden-xs">
    <input type="text" name="cari" placeholder="Search..." class="form-control" value="{{old('cari')}}">
    <input type="Submit" value="Search">
</form>
<br/>

<a href="/jenisdonatur/create" class="btn btn-info" role="button">Tambahkan Jenis Donatur</a>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <center><h3 class="box-title">Daftar Jenis Donatur</h3></center>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Jenis Donatur</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jenisdonaturs as $jenis)
                        <tr>
                            <td>{{ $jenis->jenisDonatur }}</td>
                            <td><a href="jenisdonatur/delete/{{$jenis->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            <td><a href="jenisdonatur/edit/{{$jenis->id}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>        
@endsection()

                        