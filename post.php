<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="sample, page">
    <title>Sample page - form</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous">
    </script>
    <script src="js/jquery.color.js">
    </script>
    <script type="text/javascript" src="js/script.js">
    </script>
  </head>
  <body>
    <?php

    $name_user = $_POST["id_person"];
    $message_user = $_POST["mess"];
    $email_user = $_POST["email"];
    $phone_user = $_POST["phone"];

    if ((isset($name_user))&&(isset($message_user))&&(isset($email_user))&&(isset($phone_user))) {
      echo "<h3>Dziękujemy za wysłanie formularza z następującymi danymi:</h3>";
    }else {
        echo "<h3>'Brak danych do wyświetlenia'</h3>";
    }

      // function showFormData(){
      //   foreach($_POST[''] as $index => $value) {
      //     echo $all_input;
      //
      //   }
      // };
      echo "<div class='resume_form'>";
      echo "<p>name: </p>"." ".$name_user;
      echo "<br/>";
      echo "<p>email: </p>"." ".$email_user;
      echo "<br/>";
      echo "<p>phone: </p>"." ".$phone_user;
      echo "<br/>";
      echo "<p>message from user: </p>"." ".$message_user;
      echo "<br/>";
      echo "</div>";
     ?>

  </body>
</html>
