@extends('layouts.home')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Kegiatan</h4> 
    </div>
</div>

<div class="row">
  <div class="col-sm-12">  
    <div class="white-box">
      <center><h3 class="box-title">Edit Kegiatan</h3></center></br>   
      <form action="/kegiatan/edit/{{$Kegiatan->id}}" method="post" class="form-horizontal form-material">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="namaKegiatan" class="col-md-12">Nama Kegiatan</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="namaKegiatan" placeholder="Masukkan Nama Kegiatan" name="namaKegiatan" class="form-control form-control-line" value="{{$Kegiatan->namaKegiatan}}" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="tgl_mulai" class="col-md-12">Tanggal Mulai</label>
          <div class="col-md-12">
            <input type="Date" class="form-control" id="tgl_mulai" placeholder="Masukkan Tanggal Mulai" name="tgl_mulai" class="form-control form-control-line" value="{{$Kegiatan->tgl_mulai}}" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="tgl_selesai" class="col-md-12">Tanggal Selesai</label>
          <div class="col-md-12">
            <input type="date" class="form-control" id="tgl_selesai" placeholder="Masukkan Tanggal Mulai" name="tgl_selesai" class="form-control form-control-line" value="{{$Kegiatan->tgl_selesai}}" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="tempat" class="col-md-12">Tempat Pelaksanaan</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Pelaksanaan" name="tempat" class="form-control form-control-line" value="{{$Kegiatan->tempat}}" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="rencana_donasi" class="col-md-12">Rencana Donasi</label>
          <div class="col-md-2">
            <input type="number" class="form-control" id="rencana_donasi" placeholder="" name="rencana_donasi" class="form-control form-control-line"value="{{$Kegiatan->rencana_donasi}}" required> 
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

        
