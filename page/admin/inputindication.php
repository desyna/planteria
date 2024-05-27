<?php
include('../helper/koneksi.php');

if (isset($_SESSION['login_user'])) {
  header("location: about.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <title>Sistem Pakar</title>

  <link rel="stylesheet" href="../css/3.css" />
  <link rel="stylesheet" href="../css/1.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="web-1-screens2">
    <header class="top-bar-p">
      <div class="logo-dumy-parent">
        <div class="logo-dumy">
          <img class="logo-icon" loading="lazy" alt="" src="../img/logo.png" />

          <a class="green-plants">Planteria</a>
        </div>
        <nav class="badlogoblack">
          <a class="home" href="homepage.php">Home</a>
          <a class="diagnosa" href="disease.php">Disease</a>
          <a class="disease" href="indication.php">Indication</a>
          <a class="about" href="knowledge.php">Knowledge</a>
        </nav>
      </div>
      <div class="benefits-of-pp-crypto-exchange">
        <a class="admin" href="../helper/logout.php">Logout</a>
        <div class="icon-a2">
          <div class="icon-a-inner"></div>
          <img class="solarlogin-2-broken-icon" loading="lazy" alt="" src="../img/iconA.png" />
        </div>
      </div>
    </header>
    <section class="web-1-screens-child">
      <!-- <div class="sets-for-all-styles-parent1"> -->
      <h1 class="sets-for-all4">Indication</h1><br>
      <div class="frame-item form">
        <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="inputindication.php">
          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="nama">ID Gejala:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="idgejala" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group has-feedback form">
            <label class="control-label col-sm-2" for="nama">Gejala:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="gejala" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group form">
            <label class="control-label col-sm-2" for="alamat">Daerah:</label>
            <div class="col-sm-10">
              <select class="form-control" name="daerah" onChange='this.form.submit();'>
                <option>Daerah</option>
                <option>Akar</option>
                <option>Batang</option>
                <option>Daun</option>
                <option>Bunga</option>
                <option>Buah</option>
              </select>

            </div>
          </div>
          <div class="form-group form">
            <label class="control-label col-sm-2" for="alamat">Jenis Tanaman:</label>
            <div class="col-sm-10">
              <select class="form-control" name="jenistanaman" onChange='this.form.submit();'>
                <option>Tanaman</option>
                <option>Bawang</option>
                <option>Cabai</option>
              </select>

            </div>
          </div>
          <a href="indication.php" class="form btn btn-primary" style="background-color: #318161; color:white;">Kembali</a>
          <button type="submit" name="submit" class="btn btn-primary" style="background-color: #318161;">Simpan</button>
          <?php
          if (isset($_POST['submit'])) {
            $idgejala     = $_POST['idgejala'];
            $gejala       = $_POST['gejala'];
            $daerah       = $_POST['daerah'];
            $jenistanaman = $_POST['jenistanaman'];
            $query = "INSERT INTO gejala SET idgejala='$idgejala',gejala='$gejala',daerah='$daerah',jenistanaman='$jenistanaman'";
            $result = mysqli_query($konek_db, $query);
            if ($result) {
              echo '<script language="javascript">';
              echo 'alert("Data Berhasil disimpan")';
              echo '</script>';
            }
          }
          ?>
        </form>
      </div>
    </section>
  </div>
  <footer></footer>
</body>

</html>