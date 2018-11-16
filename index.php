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
     <?php
     $isEasy = $_POST['check'];
     if (isset($_POST['button'])){
       if($isEasy == true){
       echo "<p>c'est facile<p>";
     } else {
       echo "<p>c'est difficile<p>";
     }
   }
      ?>
   </body>
 </html>
