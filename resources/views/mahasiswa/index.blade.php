<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Hello, world!</title>
    </head>
    <body>
        <div class="container">
            <div class="text-center"><h1> Data Mahasiswa </h1></div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $no => $hasil)
                            <tr>
                                <th> {{ $no+1 }} </th>
                                <td> {{ $hasil->nama }} </td>
                                <td> {{ $hasil->alamat }} </td>
                                <td> {{ $hasil->notelp }} </td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>