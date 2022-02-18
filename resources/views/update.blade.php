<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="row" style="background-color: #112D4E; color: white;">
        <div class="col-4"></div>
    <div class="col-4" style="background-color: #112D4E; font-size: 18px;  color: white;">
    <form action="/edit" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<table class="table table-borderless" style="color: white;">
        <tr>
            @foreach($biodata as $a)
            <td>ID : {{ $a->idpeserta }}</td><td><input type="hidden" name="idpeserta" value="{{ $a->idpeserta }}"></td>
            
            </tr>
            <tr>
                <td>Nama :</td><td><input type="text" id="nama" name="nama"  class="form-control" value="{{ $a->nama }}"></td>
            </tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <select name="jeniskelamin" id="jeniskelamin" style="width: 200px; height:40px; font-size: 16px;" class="form-select form-select-lg" value="{{ $a->jeniskelamin }}">
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>                                             
                    </select>
                </td>
            </tr>  
            <tr>
                <td>Departemen :</td><td><input type="text" id="departemen" name="departemen"  class="form-control" value="{{ $a->departemen }}"></td>
            </tr>
            <tr>
                <td>Nomor Telfon :</td><td><input type="text" id="notelp" name="notelp"  class="form-control" value="{{ $a->notelp }}"></td>
            </tr>     

            
        </table>

        <image src="{{ Storage::url($a->image) }} " width="250" height="300">

     </br>
        <div style="padding-left: 400px;">
        <input type="submit" class="btn btn-danger" value="Edit" style="width:100px">
        </div>
    </form>
    <div class="col-4"></div>
</div>
</div>
    @endforeach
</body>
</html>
