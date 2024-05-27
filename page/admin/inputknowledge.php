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
      <h1 class="sets-for-all4">Knowledge Base</h1><br>
      <div class="frame-item">
        <form id="form1" class="form" name="form1" method="post" action="inputknowledge.php">
          <label for="sel1">Jenis Tanaman</label>
          <select class="form-control" name="tanaman" onChange='this.form.submit();'>
            <option>Tanaman</option>
            <option>Bawang</option>
            <option>Cabai</option>
          </select>
        </form>
        <form id="form1" class="form" name="form1" method="post">
          <label for="sel1">Hama / Penyakit</label>
          <select class="form-control" name="penyakit">
            <option>Hama / Penyakit</option>
            <?php
            $tampil = "select * from penyakit where jenistanaman= \"" . $_POST['tanaman'] . "\"";
            $query1 = mysqli_query($konek_db, $tampil);
            while ($hasil = mysqli_fetch_array($query1)) {
              echo "<option value='" . $hasil['namapenyakit'] . "'>" . $hasil['idpenyakit'] . " " . $hasil['namapenyakit'] . "</option>";
            }
            ?>
          </select><br>
          <label for="sel2">GEJALA</label>
          <form id="form2" class="form" name="form2" method="post" action="../diagnosa.php">
            <div class="panel panel-primary">
              <div class="panel-heading">AKAR</div>
              <div class="panel-body">
                <?php
                if (isset($_POST['tanaman']))
                  if ($_POST['tanaman'] != "jenistanaman") {
                    $tampil = "select * from gejala where daerah='akar' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query)) {
                      echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                    }
                  }
                ?>
                <br>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">BATANG</div>
              <div class="panel-body">
                <?php
                if (isset($_POST['tanaman']))
                  if ($_POST['tanaman'] != "jenistanaman") {
                    $tampil = "select * from gejala where daerah='batang' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query)) {
                      echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                    }
                  }
                ?>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">DAUN</div>
              <div class="panel-body">
                <?php
                if (isset($_POST['tanaman']))
                  if ($_POST['tanaman'] != "jenistanaman") {
                    $tampil = "select * from gejala where daerah='daun' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query)) {
                      echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                    }
                  }
                ?>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">BUAH/UMBI</div>
              <div class="panel-body">
                <?php
                if (isset($_POST['tanaman']))
                  if ($_POST['tanaman'] != "jenistanaman") {
                    $tampil = "select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query)) {
                      echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                    }
                  }
                ?>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">BUNGA</div>
              <div class="panel-body">
                <?php
                if (isset($_POST['tanaman']))
                  if ($_POST['tanaman'] != "jenistanaman") {
                    $tampil = "select * from gejala where daerah='bunga' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query)) {
                      echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                    }
                  }
                ?>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">BIJI</div>
              <div class="panel-body">
                <?php
                if (isset($_POST['tanaman']))
                  if ($_POST['tanaman'] != "jenistanaman") {
                    $tampil = "select * from gejala where daerah='biji' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query)) {
                      echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                    }
                  }
                ?>

                <br>
              </div>
            </div><br>
            <a href="knowledge.php" class="form btn btn-primary" style="background-color: #318161; color:white;">Kembali</a>
            <button type="submit" name="submit" class="btn btn-primary" style="background-color: #318161;">Simpan</button>
            <?php
            if (isset($_POST['submit'])) {
              $penyakit = $_POST['penyakit'];
              $gejala = $_POST['gejala'];
              $jumlah_dipilih = count($gejala);
              for ($x = 0; $x < $jumlah_dipilih; $x++) {
                $hasil = mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) values('$penyakit','$gejala[$x]')");
                if ($hasil) {
                  echo '<script language="javascript">';
                  echo 'alert("Data Berhasil disimpan")';
                  echo '</script>';
                }
              }
            }

            ?>
          </form>
      </div>
  </div>
  </section>
  </div>
  <footer></footer>
</body>

</html>