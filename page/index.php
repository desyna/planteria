<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <title>Sistem Pakar</title>

  <link rel="stylesheet" href="css/1.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="web-1-screens">
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
    <main class="web-1-screens-inner">
      <section class="frame-parent">
        <div class="frame-group">
          <div class="frame-wrapper">
            <div class="frame-container">
              <div class="sets-for-all-styles-parent">
                <h1 class="sets-for-all">Healthy Plants</h1>
                <h1 class="sets-for-all1">Healthy Farms</h1>
              </div>
              <p class="lorem-ipsum-dolor">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore
              </p>
              <div class="button">
                <button class="blockchain-development-parent" id="frameButton">
                  <div class="blockchain-development"></div>
                  <div class="learn-more-wrapper">
                    <div class="learn-more">
                      <a href="homepage.php" style="color: white;">GET START</a>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
          <img class="image-2-icon" loading="lazy" alt="" src="img/image1.png" />
        </div>
        <footer class="image-1-parent">
          <img class="image-1-icon" loading="lazy" alt="" src="img/image2.png" />

          <div class="frame-div">
            <div class="sets-for-all-styles-group">
              <h1 class="sets-for-all2">Plant Disease</h1>
              <p class="lorem-ipsum-dolor1">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo
              </p>
              <div class="button1">
                <button class="rectangle-parent" id="frameButton1">
                  <div class="frame-child"></div>
                  <div class="learn-more-container">
                    <div class="learn-more1">
                      <a href="3.php" style="color: white;">SEE ALL</a>
                    </div>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </footer>
      </section>
    </main>
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