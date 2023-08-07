<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
