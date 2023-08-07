<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="/image/K-favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Web Technology Project</title>
</head>

<body>
  <table>
    <tr>
      <td>
        <b>
          <?php
          if (isset($_POST['email']) && isset($_POST['password'])) {
            $DEFAULT_EMAIL = "s221210261@ogr.com";
            $DEFAULT_PASSWORD = "qweasd";
            $email = $_POST["email"];
            $password = $_POST["password"];
            if ($email != "" && $password != "") {
              if ($email == $DEFAULT_EMAIL && $password == $DEFAULT_PASSWORD) {
                echo "Hoşgeldiniz: $email";
                echo "<p> <a href='login.php'>&lt;GERİ DÖN&gt;</a></p> ";
              } else {
                header("Location:login.php");
              }
            } else {
              header("Location:login.php");
            }
          } else {
            header("Location:login.php");
          }
          ?>
          <b>
      </td>
    </tr>
  </table>

</body>

</html>
