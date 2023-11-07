<?php
        if($_POST) {
            $email = $_POST['email'];
            $sujet = $_POST['sujet'];
            $message = $_POST['message'];

            // Votre adresse email
            $to = "mattheotermine104@gmail.com";

            // Préparation de l'email
            $headers = "De: $email";
            $body = "Vous avez reçu un nouveau message du formulaire de contact de votre site web.\n\n"."Voici les détails:\n\nEmail: $email\n\nSujet: $sujet\n\nMessage:\n$message";

            // Envoi de l'email
            if(mail($to, $sujet, $body, $headers)) {
                echo "Message envoyé avec succès.";
            } else {
                echo "L'envoi du message a échoué.";
            }
        } else {
            echo "Erreur : Aucune donnée reçue.";
        }
        ?>