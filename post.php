
    <?php

    $name_user = @$_POST["id_person"];
    $message_user = @$_POST["mess"];
    $email_user = @$_POST["email"];
    $phone_user = @$_POST["phone"];

    if ((isset($name_user))&&(isset($message_user))&&(isset($email_user))&&(isset($phone_user))&&(strlen($phone_user))==9) {

echo <<< END
    "<h3>Dziękujemy za wysłanie formularza z następującymi danymi:</h3>";
     "<div class='resume_form'>";
     "<p>name:$name_user</p>;
     "<br/>";
     "<p>email: </p>"$email_user;
     "<br/>";
     "<p>phone: </p>"." ".$phone_user;
     "<br/>";
     "<p>message from user: </p>"." ".$message_user;
     "<br/>";
     "</div>";
END;
    }else {
        echo "<h3>Brak danych do wyświetlenia</h3>";
    }

     ?>
