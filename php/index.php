<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Имя:
<input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Веб сайт:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Комментарий:
<textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Пол:
<input type="radio" name="gender" value="Женщина">Женщина
<input type="radio" name="gender" value="Мужчина">Мужчина
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Отправить">

</form>

<?php
// Определить переменные и установить в пустые значения
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Имя обязательно";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])){
    $emailErr = "Email обязательно";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])){
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Пол обязательно";
  } else{
    $gender = test_input($_POST["gender"]);
  }
}
?>
</body>
</html>