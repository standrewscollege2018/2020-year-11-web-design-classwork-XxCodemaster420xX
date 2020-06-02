<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $greeting_text = $_POST['name_entered'];
  if ($greeting_text == "Rumpelstiltskin"){
    echo "Thats my name";

  }
    else {
      echo "thats not my name";
    }

     ?>
  </body>
</html>
