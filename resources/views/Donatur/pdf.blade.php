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
        <div><h2>DAFTAR DONATUR</h2></div>
       <table id="example2" role="grid">
       <thead>
                        <tr>
                            <th>Jenis Donatur</th>
                            <th>Nama Donatur</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Email</th>
                        </tr>
                    </thead>
            <tbody>
            @foreach($donaturs as $donatur)
                        <tr role="row" class="odd">
                            <td>{{$donatur->jenisDonatur}}</td>
                            <td>{{ $donatur->nama_donatur }}</td>
                            <td>{{ $donatur->alamat }}</td>
                            <td>{{ $donatur->no_hp }}</td>
                            <td>{{ $donatur->email }}</td>
                        </tr>
                    @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>