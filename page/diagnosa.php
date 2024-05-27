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
      <h1 class="sets-for-all4">diagnosa</h1><br>
      <div class="frame-item">
        <form id="form1" class="form" name="form1" method="post" action="diagnosa.php">
          <label for="sel1">Jenis Tanaman</label>
          <select class="form-control" name="tanaman" onChange='this.form.submit();'>
            <option>Tanaman</option>
            <option>Bawang</option>
            <option>Cabai</option>
          </select>
        </form>
        <form id="form2" class="form" name="form2" method="post" action="diagnosa.php">
          <?php
          if (isset($_POST['tanaman']))
            if ($_POST['tanaman'] != "jenistanaman") {
              echo  "<br><label>AKAR</label><br>";
              $tampil = "select * from gejala where daerah='akar' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
              $query = mysqli_query($konek_db, $tampil);
              while ($hasil = mysqli_fetch_array($query)) {
                echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
              }
            }
          ?>
          <?php
          if (isset($_POST['tanaman']))
            if ($_POST['tanaman'] != "jenistanaman") {
              echo  "<br><label>BATANG</label><br>";
              $tampil = "select * from gejala where daerah='batang' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
              $query = mysqli_query($konek_db, $tampil);
              while ($hasil = mysqli_fetch_array($query)) {
                echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
              }
            }
          ?>

          <?php
          if (isset($_POST['tanaman']))
            if ($_POST['tanaman'] != "jenistanaman") {
              echo  "<br><label>DAUN</label><br>";
              $tampil = "select * from gejala where daerah='daun' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
              $query = mysqli_query($konek_db, $tampil);
              while ($hasil = mysqli_fetch_array($query)) {
                echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
              }
            }
          ?>
          <?php
          if (isset($_POST['tanaman']))
            if ($_POST['tanaman'] != "jenistanaman") {
              echo  "<br><label>BUAH/UMBI</label><br>";
              $tampil = "select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
              $query = mysqli_query($konek_db, $tampil);
              while ($hasil = mysqli_fetch_array($query)) {
                echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
              }
            }
          ?>
          <?php
          if (isset($_POST['tanaman']))
            if ($_POST['tanaman'] != "jenistanaman") {
              echo  "<br><label>BUNGA</label><br>";
              $tampil = "select * from gejala where daerah='bunga' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
              $query = mysqli_query($konek_db, $tampil);
              while ($hasil = mysqli_fetch_array($query)) {
                echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
              }
            }
          ?>
          <?php
          if (isset($_POST['tanaman']))
            if ($_POST['tanaman'] != "jenistanaman") {
              echo  "<br><label>BIJI</label><br>";
              $tampil = "select * from gejala where daerah='biji' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
              $query = mysqli_query($konek_db, $tampil);
              while ($hasil = mysqli_fetch_array($query)) {
                echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
              }
            }
          ?>

          <br>
          <button type="submit" style="background-color: #318161;" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK PENYAKIT</button><br><br>
          <div class="panel panel-info">
            <div class="panel-heading form">HASIL DIAGNOSA</div>
            <div class="panel-body">
              <div class="box-body table-responsive form">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>ID PENYAKIT</th>
                      <th>Nama Penyakit</th>
                      <th>Jenis Tanaman</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <?php
                  if (isset($_POST['submit'])) {
                    $gejala = $_POST['gejala'];
                    $jumlah_dipilih = count($gejala);
                    for ($x = 0; $x < $jumlah_dipilih; $x++) {
                      $tampil = "select DISTINCT p.idpenyakit, p.namapenyakit, p.jenistanaman from basispengetahuan b, penyakit p where b.gejala='$gejala[$x]' and p.namapenyakit=b.namapenyakit group by namapenyakit";
                      $result = mysqli_query($konek_db, $tampil);
                      $hasil  = mysqli_fetch_array($result);
                    }
                    echo "
                          <tr>  
                          <td>" . $x . "</td>
                          <td>" . $hasil['idpenyakit'] . "</td>
                          <td>" . $hasil['namapenyakit'] . "</td>  
                          <td>" . $hasil['jenistanaman'] . "</td> 
                          <td><a href=\"detaildiagnosa.php?id=" . $hasil['idpenyakit'] . "\"><i class='glyphicon glyphicon-search'></i></a></td>
                          </tr>";
                  }

                  ?>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
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