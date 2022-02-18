<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript">
          function lihatbiodata(){
            $.ajax({
                type: "GET",
                url: "/tabel"
                }).done(function(data){
                    $('#tabel').html(data);
                });
        }

        function caribiodata(){
            var nama = document.getElementById("nama").value;
            $.ajax({
                type: "GET",
                url: "/cari/"+nama
                }).done(function(data){
                    $('#tabel').html(data);
                });
        }
    </script>

    <title>Document</title>
</head>
<body onload="lihatbiodata();">
<h1 class="container-fluid p-5 text-white" style="text-align:center; background-color:#112D4E;">Peserta Magang Kampus Merdeka Batch 2<h1>
    <h3 style="text-align:center; color:#112D4E;">Biodata Kelompok 11</h3>
 
    
    
    <br/>
    <label for="nama">Masukkan nama peserta</label>
    <table>
        <tr>    
    <td><input type="text" id="nama" class="form-control form-control" style="width: 300px;"></td>
    <td><button type="button" id="submit" class=" btn" style="width:100px; background-color: #DBE2EF;" onclick="caribiodata();">Search</button></td>
    <td><button type="button" id="all" class=" btn" style="width:125px; background-color: #3F72AF;" onclick="lihatbiodata();">Lihat Semua</button></td>    
        </tr>
    </table>
    <br/>

    <button type="button" style="background-color: #112D4E; color: white;" id="isi" class=" btn" data-bs-toggle="modal" data-bs-target="#ModalInsert">Tambah Peserta Magang</button>
    <p></p>
    
    <div id="tabel">
    
    </div>

    <div class="modal" id="ModalInsert">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
    <form action="/tambah" id="formdata" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Pendaftaran Peserta Magang Baru</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
        <table>
        <tr>
                <td>Id Peserta :</td><td><input type="text" id="idpeserta" name="idpeserta"  class="form-control"></td>
            </tr>
        <tr>
                <td>Upload Profile</td> <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td>Nama :</td><td><input type="text" id="nama" name="nama"  class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <select name="jeniskelamin" id="jeniskelamin" style="width: 200px; font-size: 18px;" class="form-select form-select-lg">
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Departemen :</td><td><input type="text" id="departemen" name="departemen"  class="form-control"></td>
            </tr>
            <tr>
                <td>No Telfon :</td><td><input type="text" id="notelp" name="notelp"  class="form-control"></td>
            </tr>

            
        </table>
        
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="submit" id="submit">
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>