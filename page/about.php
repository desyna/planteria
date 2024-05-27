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
        <!-- <a class="admin">Admin</a> -->
        <button type="button" class="btn " id="myBtn">Admin</button>
        <div class="icon-a2">
          <div class="icon-a-inner"></div>
          <img class="solarlogin-2-broken-icon" loading="lazy" alt="" src="img/iconA.png" />
        </div>
      </div>
    </header>
    <section class="web-1-screens-child">
      <!-- <div class="sets-for-all-styles-parent1"> -->
      <h1 class="sets-for-all4">About Us</h1><br>
      <div class="frame-item form">
        <p>Bawang dan cabai merupakan komoditas hortikultura yang sangat penting di Indonesia, baik dari segi ekonomi maupun konsumsi sehari-hari. Kedua tanaman ini digunakan sebagai bumbu utama dalam banyak masakan tradisional, sehingga permintaannya sangat tinggi. Produksi bawang dan cabai sering menghadapi berbagai tantangan, salah satunya adalah serangan penyakit. Penyakit pada tanaman bawang dan cabai dapat disebabkan oleh berbagai patogen seperti jamur, bakteri, virus, dan nematoda. Serangan penyakit ini tidak hanya menurunkan kuantitas hasil panen tetapi juga mempengaruhi kualitas produk yang pada akhirnya dapat merugikan petani secara ekonomi.</p>
      </div>
      <div class="frame-item form">
        <h2>Contact Us</h2>
        <p>Vincentius Batista Rahma Bujana (123210179)</p>
        <p>Desy Nur Azizah (123210083)</p>
      </div>
    </section>
    <footer>
      <p>&#169;Copyright 2024, Informatika UPNYK</p>
    </footer>
  </div>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
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

  <script>
    $(document).ready(function() {
      $("#myBtn").click(function() {
        $("#myModal").modal();
      });
    });
  </script>

</body>

</html>