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
      <td>ADI SOYADI</td>
      <td>:</td>
      <td>
        <b>
          <?php
          if (isset($_POST['name']) && isset($_POST['surname'])) {
            $DEFAULT_USERNAME = "asd";
            $DEFAULT_PASSWORD = "asd";
            $username = $_POST["name"];
            $password = $_POST["surname"];
            if ($username != "" && $password != "") {
              if ($username == $DEFAULT_USERNAME && $password == $DEFAULT_PASSWORD) {
                echo "Hoşgeldiniz <br><hr>";
                echo "$username";
              } else {
                header("Location:login.php");
              }
            } else {
              header("Location:login.php");
            }
          } else {
            header("Location:login.php");
          }
          echo "<p> <a href='login.php'>&lt;GERİ DÖN&gt;</a></p> ";
          ?>
          <b>
      </td>
    </tr>
  </table>

</body>

</html>
