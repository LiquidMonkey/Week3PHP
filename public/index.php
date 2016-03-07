<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculate stuff</title>
  </head>
  <body>
    <form method="post" action="calc.php">
      <input type="number" name="num1" value="1" min="1">
      <select name="calcType">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">X</option>
        <option value="/">/</option>
      </select>
      <input type="number" name="num2" value="1" min="1">

      <input type="submit" value="calculate">
    </form>
  </body>
</html>
