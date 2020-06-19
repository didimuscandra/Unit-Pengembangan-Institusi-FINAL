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
      <center><h3 class="box-title">Tambah Kegiatan</h3></center></br>   
      <form action="/kegiatan/create" method="post" class="form-horizontal form-material">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="namaKegiatan" class="col-md-12">Nama Kegiatan</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="namaKegiatan" placeholder="Masukkan Nama Kegiatan" name="namaKegiatan" class="form-control form-control-line" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="tgl_mulai" class="col-md-12">Tanggal Mulai</label>
          <div class="col-md-12">
            <input type="Date" class="form-control" id="tgl_mulai" placeholder="Masukkan Tanggal Mulai" name="tgl_mulai" class="form-control form-control-line" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="tgl_selesai" class="col-md-12">Tanggal Selesai</label>
          <div class="col-md-12">
            <input type="date" class="form-control" id="tgl_selesai" placeholder="Masukkan Tanggal Mulai" name="tgl_selesai" class="form-control form-control-line" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="tempat" class="col-md-12">Tempat Pelaksanaan</label>
          <div class="col-md-12">
            <input type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Pelaksanaan" name="tempat" class="form-control form-control-line" required> 
          </div>
        </div>
        <div class="form-group">
          <label for="rencana_donasi" class="col-md-12">Rencana Donasi</label>
          <div class="col-md-2">
            <input type="number" class="form-control" id="rencana_donasi" placeholder="" name="rencana_donasi" class="form-control form-control-line" required> 
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
var rupiah = document.getElementById("rencana_donasi");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
</script>
@endsection()

        