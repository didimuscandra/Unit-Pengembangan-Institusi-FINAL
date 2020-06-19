@extends('layouts.home')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Donatur</h4> 
    </div>
</div>

<div class="row">
  <div class="col-sm-12">  
    <div class="white-box">
      <center><h3 class="box-title">Edit Donatur</h3></center></br>   
      <form action="/donatur/edit/{{$Donatur->id}}" method="post" class="form-horizontal form-material">
      {{ csrf_field() }}
        <div class="form-group">
          <label class="col-sm-12">Jenis Donatur</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="jenis_donatur_id">
              <option value="" disabled {{ old('jenis') ? '' : 'selected' }}>Pilih Jenis Donatur</option>
              @foreach($jenisdonaturs as $jenis)
                <option value="{{$jenis->id}}" {{ old('jenis') ? 'selected' : '' }} >{{$jenis->jenisDonatur}}</option>
              @endforeach
              </select>
            </div>
        </div>
        <div class="form-group">
          <label for="namaDonatur" class="col-md-12">Nama Donatur</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="namaDonatur" placeholder="Masukkan Nama Donatur" name="nama_donatur" class="form-control form-control-line" value="{{$Donatur->nama_donatur}}" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="alamat" class="col-md-12">Alamat</label>
          <div class="col-md-12">
          <textarea rows="5" class="form-control form-control-line" name="alamat">{{$Donatur->alamat}}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="no_hp" class="col-md-12">No HP</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="no_hp" placeholder="Masukkan No HP Donatur" name="no_hp" class="form-control form-control-line" value="{{$Donatur->no_hp}}" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-md-12">Email</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="email" placeholder="Masukkan Email Donatur" name="email" class="form-control form-control-line" value="{{$Donatur->email}}" required> 
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

        