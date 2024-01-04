<!-- PHP code -->
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mahasiswa';

$koneksi = mysqli_connect($host, $username, $password, $dbname);
if (!$koneksi) {
  die("Tidak bisa terkoneksi ke database");
}
$nim      ="";
$nama     ="";
$alamat   ="";
$fakultas ="";


if(isset($_POST['submit'])){
    $nim      = $_POST['nim'];

}

?>

<!-- HTML code -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 800px
    }

    .card {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="mx-auto">
    <!-- Input Data -->
    <div class="card">
      <div class="card-header">
        Tambah/Edit Data
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim?>">
            </div>
            <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama?>">
            </div>
            <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Alamat </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat?>">
            </div>
            <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Fakultas </label>
            <div class="col-sm-10">
              <select class="form-control" id="fakultas">
                <option value="">Pilih Fakultas</option>
                <option value="Saintek" <?php if($fakultas == "saintek") echo "selected"?> >Saintek</option>
                <option value="Soshum" <?php if($fakultas == "soshum") echo "selected"?>>Soshum</option>
              </select>
            </div>
          </div>
          <div class="col-12">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
        </form>
      </div>
    </div>

    <!-- Get Data -->
    <div class="card">
      <div class="card-header text-white bg-secondary">
        Data Mahasiswa
      </div>
      <div class="card-body">
        
      </div>
    </div>
  </div>  
</body>

</html>