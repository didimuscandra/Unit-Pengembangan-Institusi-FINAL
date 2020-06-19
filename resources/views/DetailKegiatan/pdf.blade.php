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
        <div><h2>DAFTAR DETAIL KEGIATAN</h2></div>
       <table id="example2" role="grid">
       <thead>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Nama Peserta</th>
                        </tr>
                    </thead>
            <tbody>
            @foreach($detailkegiatans as $detailkegiatan)
                        <tr ole="row" class="odd">
                            <td>{{$detailkegiatan->namaKegiatan }}</td>
                            <td>{{$detailkegiatan->namaPeserta }}</td>
                        </tr>
                    @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>