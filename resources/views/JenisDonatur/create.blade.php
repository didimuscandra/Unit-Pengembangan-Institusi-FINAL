@extends('layouts.home')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Jenis Donatur</h4> 
    </div>
</div>

<div class="row">
  <div class="col-sm-12">  
    <div class="white-box">
      <center><h3 class="box-title">Tambah Jenis Donatur</h3></center></br>   
      <form action="/jenisdonatur/create" method="post" class="form-horizontal form-material">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="judul" class="col-md-12">Jenis Donatur</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="jenisDonatur" placeholder="Masukkan Jenis Donatur" name="jenisDonatur" class="form-control form-control-line" required> 
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection()

        