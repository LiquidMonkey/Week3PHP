<?php
  function answer($calcType, $num1, $num2){
    switch($calcType){
      case "+":
        return $num1 + $num2;
        break;
      case "-":
        return $num1 - $num2;
        break;
      case "/":
        return $num1 / $num2;
        break;
      case "*":
        return $num1 * $num2;
        break;
    }
  }

  $calcType = $_POST['calcType'];
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $_POST['answer'] = answer($calcType, $num1, $num2);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculate stuff</title>
  </head>
  <body>
    <form method="post" action="calc.php">
      <input disabled type="number" name="num1" value=<?php echo '"'.$_POST['num1'].'"' ?> min="1">
      <?echo $_POST['calcType']?>
      <input disabled type="number" name="num2" value=<?php echo '"'.$_POST['num2'].'"'?>  min="1">
      <?echo "="?>
      <input disabled type="number" value= <?php echo '"'.$_POST['answer'].'"'?> >
    </form>
  </body>
</html>
