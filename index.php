<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form method="post">
    <select name="check">
      <option value="true">True</option>
      <option value="false">False</option>
    </select>
    <input type="submit" name="button" value="Valider">
  </form>
  <a href="http://PHP/"><button type="button" class="btn btn-danger" name="button">Accueil</button></a>
  <?php
  $isEasy = (isset($_POST['check']));
  if (isset($_POST['button'])){
    if($isEasy == 'true'){
      echo 'c\'est facile';
    } else {
      echo 'c\'est difficile';
    }
  }
  ?>
</body>
</html>
