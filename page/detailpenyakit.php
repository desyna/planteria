<?php
include('helper/koneksi.php');

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

  <link rel="stylesheet" href="css/3.css" />
  <link rel="stylesheet" href="css/1.css" />
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
          <img class="logo-icon" loading="lazy" alt="" src="img/logo.png" />

          <a class="green-plants">Planteria</a>
        </div>
        <nav class="badlogoblack">
          <a class="home" href="index.php">Home</a>
          <a class="diagnosa" href="diagnosa.php" id="diagnosaText">Diagnosa</a>
          <a class="disease" href="penyakit.php" id="diseaseText">Disease</a>
          <a class="about" href="about.php">About</a>
        </nav>
      </div>
      <div class="benefits-of-pp-crypto-exchange">
        <button type="button" class="btn " id="myBtn">Admin</button>
        <div class="icon-a2">
          <div class="icon-a-inner"></div>
          <img class="solarlogin-2-broken-icon" loading="lazy" alt="" src="img/iconA.png" />
        </div>
      </div>
    </header>
    <section class="web-1-screens-child">
      <!-- <div class="sets-for-all-styles-parent1"> -->
      <h1 class="sets-for-all4">disease database</h1><br>
      <div class="frame-item form">
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">ID :</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='idpenyakit' readonly value='" . $data['idpenyakit'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">NAMA :</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='namapenyakit' readonly value='" . $data['namapenyakit'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">JENIS :</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['jenistanaman'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">GEJALA :</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='" . $_GET['id'] . "' and p.namapenyakit=b.namapenyakit";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['gejala'] . "'><br>";
            }
            echo "<input type='text'  class='form-control' id='jenistanaman' readonly value=''><br>";
            ?>
          </div>
        </div>
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">KULTUR TEKNIS :</label><br>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea  rows='8' class='form-control' id='penanganan'  readonly>" . $data['kulturteknis'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">FISIK MEKANIS :</label><br>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['fisikmekanis'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">KIMIAWI :</label><br>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea  rows='8' class='form-control' id='penanganan' readonly>" . $data['kimiawi'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group form" method="POST">
          <br><label class="control-label col-sm-2">HAYATI :</label><br>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['hayati'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>

        <a href="penyakit.php" class="form btn btn-primary" style="background-color: #318161; color:white;">Kembali</a>
      </div>
    </section>
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px; ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="helper/ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <button type="submit" style="background-color: #318161;" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <footer></footer>

  <script>
    $(document).ready(function() {
      $("#myBtn").click(function() {
        $("#myModal").modal();
      });
    });
  </script>
</body>

</html>