<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" class="table table-hover">
        <tr style="text-align:center">
            <th>ID</th>
            <th>Foto Profile</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Departemen</th>
            <th>Nomor Telfon</th>
            <th>Action</th>
        </tr>

        @foreach($biodata as $b)
        <tr style="text-align:center">
            <td>{{ $b->idpeserta }}</td>
            <td><image src="{{ Storage::url($b->image) }}" width="200" height="200"></td>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->jeniskelamin }}</td>
            <td>{{ $b->departemen }}</td>
            <td>{{ $b->notelp }}</td>
            <td> <a href="/show/{{$b->nama }}"><button type="button" class="btn btn-warning btn">Edit</button></a> 
            <a href="/hapus/{{$b->nama }}"><button type="button" class="btn btn-danger btn">Hapus</button> </a></td></td>
        </tr>
        @endforeach
</table>
    
</body>
</html>