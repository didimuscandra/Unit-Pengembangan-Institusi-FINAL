@extends('layouts.home')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Perolehan</h4> 
    </div>
</div>

<div class="row">
  <div class="col-sm-12">  
    <div class="white-box">
      <center><h3 class="box-title">Edit Perolehan</h3></center></br>   
      <form action="/perolehan/edit/{{$perolehans->id}}" method="post" class="form-horizontal form-material">
      {{ csrf_field() }}
        <div class="form-group">
          <label class="col-sm-12">Donatur</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="donatur_id" required>
              <option value="" disabled {{ old('namaDona') ? '' : 'selected' }}>Pilih Donatur</option>
              @foreach($donaturs as $namaDona)
                <option value="{{$namaDona->id}}" {{ old('namaDona') ? 'selected' : '' }} >{{$namaDona->nama_donatur}}</option>
              @endforeach
              </select>
            </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-12">Kegiatan</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="kegiatan_id" required>
              <option value="" disabled {{ old('namaKegi') ? '' : 'selected' }}>Pilih Kegiatan</option>
              @foreach($kegiatans as $namaKegi)
                <option value="{{$namaKegi->id}}" {{ old('namaKegi') ? 'selected' : '' }} >{{$namaKegi->namaKegiatan}}</option>
              @endforeach
              </select>
            </div>
        </div>
        
        <div class="form-group">
          <label for="tgl_donasi" class="col-md-12">Tanggal Donasi</label>
          <div class="col-md-12">
            <input type="Date" class="form-control" id="tgl_donasi" placeholder="Masukkan Tanggal Donasi" name="tgl_donasi" class="form-control form-control-line" value="{{$perolehans->tgl_donasi}}" required> 
          </div>
        </div>
        
        <!-- <div class="form-group">
          <label class="col-sm-12">Jenis Donasi</label>
            <div class="col-sm-12">
              <select class="form-control form-control-line" name="user_selected">
                <option value="" disabled selected>Pilih Jenis Donasi</option>
                <option value="$donasi_cash->id" name="donasi_cash">Donasi Cash</option>
                <option value="$donasi_barang->id" name="donasi_barang">Donasi Barang</option>
              </select>
            </div>
        </div> -->

        <div class="form-group">
          <label for="jml_donasi" class="col-md-12">Jenis Donasi</label>
            <div class="col-md-12">
              <select class="form-control form-control-line" name="user_selected" onchange="cekJenis(this.value)" required>
                <option value="A">Cash (Dollar)</option>
                <option value="B">Cash (Rupiah)</option>
                <option value="C">Mobil</option>
                <option value="D">Motor</option>
                <option value="E">Rumah</option>
                <option value="F">Tanah</option>
              </select>
              <div class="col-md-2">
                <input type="number" class="form-control" id="jml_donasi" placeholder="" onkeyup="convertCash(this)" name="jml_donasi" class="form-control form-control-line" value="{{$perolehans->jml_donasi}}" required> 
              </div>
            </div>
        </div>

        <div class="form-group">
          <label for="nama_donasi" class="col-md-12">Nama Donasi</label>
            <div class="col-md-12">
              <input type="Text" class="form-control" id="nama_donasi" placeholder="Masukkan Nama Donasi" name="nama_donasi" class="form-control form-control-line" value="{{$perolehans->nama_donasi}}" required>
            </div>
        </div>
        
        <div class="form-group">
          <label for="total_donasi" class="col-md-12">Total Donasi</label>
          <div class="col-md-2">
            <input type="number" class="form-control" id="total_donasi" placeholder="" name="total_donasi" class="form-control form-control-line" value="{{$perolehans->total_donasi}}" required> 
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

@section('footer')
<script type="text/javascript">
  var tmpJenis = "A";
  var dollar = 14718; //Setting Nilai Tukar Dollar

      function cekJenis(val){
          tmpJenis = val;
      }

      function convertCash(val){
        var cash = $(val).val();
        if(tmpJenis == "A"){
          hasil = cash * dollar;
          $('#total_donasi').val(hasil);
          
        }else{
          $('#total_donasi').val(cash);
        }   
      }
</script>
@endsection

        