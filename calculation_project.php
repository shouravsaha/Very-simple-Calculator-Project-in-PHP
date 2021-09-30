<?php include"calculate.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculation-Project</title>
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td>Num 1:</td>
        <td><input type="number" name="num1"></td>
      </tr>
      <tr>
        <td>Num 2:</td>
        <td><input type="number" name="num2"></td>
      </tr>
      <tr>
        <td><input type="submit" name="calculate" value="calculate"></td>
      </tr>
    </table>
  </form>
</body>
</html>

<?php
  if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (empty($num1) && empty($num2)) {
      echo "<p style='color:red;'>Please input this field</p>";
    }else{

      echo "<h2>First number is : $num1 <br></h2>";
      echo "<h2>Second number is : $num2 <br></h2>";
      $calculate = new calculation;
      $calculate->sum($num1, $num2);
      $calculate->sub($num1, $num2);
      $calculate->mul($num1, $num2);
      $calculate->div($num1, $num2);
    }
  }



?>