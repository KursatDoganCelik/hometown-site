<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="/image/K-favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Web Technology Project</title>
</head>

<body>
  <!-- Navbar Start-->
  <nav class="navbar navbar-expand-md bg-danger navbar-white ">
    <div class="container">
      <a href="../index.html" class="navbar-brand text-white">Anasayfa</a>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a href="../CV.html" class="nav-link active text-white">
              CV
            </a>
          </li>
          <li class="nav-item">
            <a href="../sehir.html" class="nav-link active text-white">
              Şehir
            </a>
          </li>
          <li class="nav-item">
            <a href="../takim.html" class="nav-link active text-white">
              Takım
            </a>
          </li>
          <li class="nav-item">
            <a href="../login.html" class="nav-link active text-white">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a href="../#" class="nav-link active text-white">
              İletişim
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End-->
  <!-- Main Start -->
  <main>
    <div class="container mt-5">
      <div class="row mb-5">
        <div class="col-md-2"></div>
        <div class="card my-3 col-md-8 d-flex justify-content-center bg-info">
          <div class="card-body text-center px-5">
            <h3 class="card-title text-white">LOGIN</h3>
          </div>
        </div>
        <div class="col-md-2"></div>

        <!-- Form Part Start -->
        <div class="col-md-12 d-flex justify-content-center">
          <form action="control.php" method="post">
            <table class="table mx-3">
              <tbody>
                <tr>
                  <td>Kullanıcı Adı</td>
                  <td><input class="px-1" type="text" name="name"></td>
                </tr>
                <tr>
                  <td>Parola</td>
                  <td><input class="px-1" type="password" name="surname"></td>
                </tr>
              </tbody>
            </table>
            <!-- Button -->
            <div class="col-md-12 d-flex justify-content-center">
              <button type="submit" class="btn btn-lg btn-outline-info" value="Gönder">Gönder</button>
            </div>
          </form>
        </div>
        <!-- Form Part End -->

      </div>
    </div>
  </main>
  <!-- Main End -->

  <!-- Footer -->
  <footer class="fixed-bottom py-2 bg-dark text-white text-center">
    WebTechnologyProject © Kürşat Doğan Çelik
  </footer>

</html>
