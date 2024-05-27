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
  <title>Sistem Pakar</title>
  <meta name="viewport" content="initial-scale=1, width=device-width" />

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
      <h1 class="sets-for-all4">disease database</h1><br>
      <div class="frame-item">
        <form class="form-horizontal" method="post" data-toggle="validator" role="form" action="inputdisease.php">

          <div class="form-group has-feedback form">
            <label class="control-label col-sm-2" for="nama">ID Penyakit:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="idpenyakit" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>

          </div>
          <div class="form-group has-feedback form">
            <label class="control-label col-sm-2" for="nama">Nama Penyakit:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="namapenyakit" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
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
          <div class="form-group form">
            <label class="control-label col-sm-2" for="alamat">Kultur Teknis:</label>
            <div class="col-sm-10">
              <textarea rows='8' class="form-control" name="kulturteknis"></textarea>
            </div>
          </div>
          <div class="form-group form">
            <label class="control-label col-sm-2" for="alamat">Fisik Mekanis:</label>
            <div class="col-sm-10">
              <textarea rows='8' class="form-control" name="fisikmekanis"></textarea>
            </div>
          </div>
          <div class="form-group form">
            <label class="control-label col-sm-2" for="alamat">Kimiawi:</label>
            <div class="col-sm-10">
              <textarea rows='8' class="form-control" name="kimiawi"></textarea>
            </div>
          </div>
          <div class="form-group form">
            <label class="control-label col-sm-2" for="alamat">Hayati:</label>
            <div class="col-sm-10">
              <textarea rows='8' class="form-control" name="hayati"></textarea>
            </div>
          </div>
          <a href="disease.php" class="form btn btn-primary" style="background-color: #318161; color:white;">Kembali</a>
          <button type="submit" name="submit" style="background-color: #318161;" class="btn btn-primary">Simpan</button><br>
          <?php
          if (isset($_POST['submit'])) {

            $idpenyakit     = $_POST['idpenyakit'];
            $namapenyakit   = $_POST['namapenyakit'];
            $jenistanaman   = $_POST['jenistanaman'];
            $kulturteknis   = $_POST['kulturteknis'];
            $fisikmekanis   = $_POST['fisikmekanis'];
            $kimiawi        = $_POST['kimiawi'];
            $hayati         = $_POST['hayati'];
            $query = "INSERT INTO penyakit SET idpenyakit='$idpenyakit',namapenyakit='$namapenyakit',jenistanaman='$jenistanaman',kulturteknis='$kulturteknis', fisikmekanis='$fisikmekanis',kimiawi='$kimiawi',hayati='$hayati'";
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