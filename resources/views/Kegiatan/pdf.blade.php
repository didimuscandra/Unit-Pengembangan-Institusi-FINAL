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
        <div><h2>DAFTAR KEGIATAN</h2></div>
       <table id="example2" role="grid">
            <thead>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Tempat</th>
                            <th>Rencana Donasi</th>
                        </tr>
            </thead>
            <tbody>
            @foreach($kegiatans as $kegiatan)
                        <tr role="row" class="odd">
                            <td>{{ $kegiatan->namaKegiatan }}</td>
                            <td>{{ $kegiatan->tgl_mulai }}</td>
                            <td>{{ $kegiatan->tgl_selesai }}</td>
                            <td>{{ $kegiatan->tempat }}</td>
                            <td>@currency($kegiatan->rencana_donasi)</td>
                        </tr>
                    @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>