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
        <div><h2>DAFTAR PESERTA</h2></div>
       <table id="example2" role="grid">
       <thead>
                        <tr>
                            <th>Nama Peserta</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </thead>
            <tbody>
            @foreach($pesertas as $peserta)
                        <tr role="row" class="odd">
                            <td>{{ $peserta->namaPeserta }}</td>
                            <td>{{ $peserta->tempatLahir }}</td>
                            <td>{{ $peserta->tglLahir }}</td>
                            <td>{{ $peserta->gender }}</td>
                            <td>{{ $peserta->alamat }}</td>
                            <td>{{ $peserta->pekerjaan }}</td>
                        </tr>
                    @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>