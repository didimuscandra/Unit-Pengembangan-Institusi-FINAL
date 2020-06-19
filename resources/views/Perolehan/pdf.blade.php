 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: solid 2px;
        padding: 10px 5px;
      }
      tr {
        text-align: center;
      }
      .container {
        width: 100%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div><h2>DAFTAR PEROLEHAN</h2></div>
       <table id="example2" role="grid">
            <thead>
                        <tr>
                            <th>Donatur</th>
                            <th>Kegiatan</th>
                            <th>Tanggal Donasi</th>
                            <th>Jenis Donasi</th>
                            <th>Jumlah Donasi</th>
                            <th>Nilai</th>
                        </tr>
            </thead>
            <tbody>
                    @foreach($perolehans as $perolehan)
                        <tr role="row" class="odd">
                            <td>{{ $perolehan->nama_donatur }}</td>
                            <td>{{ $perolehan->namaKegiatan }}</td>
                            <td>{{ $perolehan->tgl_donasi }}</td>
                            <td>{{ $perolehan->nama_donasi }}</td>
                            <td>{{ $perolehan->jml_donasi }}</td>
                            <td>@currency($perolehan->total_donasi)</td>
                        </tr>
                    @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>