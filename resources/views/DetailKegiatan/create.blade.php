@extends('layouts.home')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Detail Kegiatan</h4> 
    </div>
</div>

<div class="row">
  <div class="col-sm-12">  
    <div class="white-box">
      <center><h3 class="box-title">Tambah Detail Kegiatan</h3></center></br>   
      <form action="/detailkegiatan/create" method="post" class="form-horizontal form-material">
      {{ csrf_field() }}
      <div class="form-group">
          <label class="col-sm-12">Nama Kegiatan</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="kegiatan_id" required>
              <option value="" disabled {{ old('kegiatan') ? '' : 'selected' }} >Pilih Kegiatan</option>
              @foreach($kegiatans as $kegiatan)
                <option value="{{$kegiatan->id}}" {{ old('kegiatan') ? 'selected' : '' }} >{{$kegiatan->namaKegiatan}}</option>
              @endforeach
              </select>
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-12">Nama Peserta</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="peserta_id" required>
              <option value="" disabled {{ old('peserta') ? '' : 'selected' }} required>Pilih Peserta</option>
              @foreach($pesertas as $peserta)
                <option value="{{$peserta->id}}" {{ old('peserta') ? 'selected' : '' }} >{{$peserta->namaPeserta}}</option>
              @endforeach
              </select>
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

        