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
        <form id="form1" name="form1" class="form" method="post" action="knowledge.php">
          <label for="sel1">Jenis Tanaman</label>
          <select class="form-control" name="tanaman" onChange='this.form.submit();'>
            <option>Tanaman</option>
            <option>Bawang</option>
            <option>Cabai</option>
          </select>
        </form>
        <a href="inputknowledge.php"><button type="button" class="btn btn-default">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
          </button></a>
        <div class="box-body table-responsive form">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>Id Penyakit</th>
                <th>Nama Penyakit</th>
                <th>Gejala</th>
                <th>Detail</th>
              </tr>
            </thead>
            <?php
            if (isset($_POST['tanaman']))
              if ($_POST['tanaman'] != "jenistanaman") {
                $queri = "Select p.idpenyakit, p.jenistanaman, b.namapenyakit, b.gejala from basispengetahuan b, penyakit p where p.namapenyakit=b.namapenyakit and p.jenistanaman=\"" . $_POST['tanaman'] . "\"";
                $hasil = mysqli_query($konek_db, $queri);
                $id = 0;

                while ($data = mysqli_fetch_array($hasil)) {
                  $id++;
                  echo "      
                  <tr>  
                    <td>" . $id . "</td>
                    <td>" . $data['idpenyakit'] . "</td>  
                    <td>" . $data['namapenyakit'] . "</td>  
                    <td>" . $data['gejala'] . "</td>
                    <td><a href=\"../services/deleteknowledge.php?id=" . $data['namapenyakit'] . "\"  onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a></td>
                  </tr>";
                }
              }
            ?>
          </table><br><br><br><br><br>
        </div>

      </div>
  </div>
  </section>
  </div>
  <footer></footer>
</body>

</html>