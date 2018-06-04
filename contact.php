<?php
include_once("utils.php");
$title = "Contact";
$description = "Vous pouvez contacter rapidement et facilement Christian MARQUAY. N'hésitez pas à faire part de toutes vos remarques et à adresser toutes vos questions.";
$affichage = "";
if (isset($_POST["send"])) {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) &&
        !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
        $email = addslashes(htmlentities($_POST["email"]));
        if (checkEmail($email)) {
            $name = addslashes(htmlentities($_POST["name"]));
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1";
            $subject = "Message provenant du formulaire en ligne : " . addslashes(htmlentities($_POST["subject"]));
            $message = array(addslashes(htmlentities($_POST["message"])), addslashes(htmlentities("\" a bien été envoyé à Christian MARQUAY.")), addslashes(htmlentities("Merci de ne pas répondre à ce courriel.")));
            $message1 = "<html><head><title>Message provenant du formulaire de www.christianmarquay.com</title></head>
                        <body><p>" . $message[0] . "</p></body></html>";
            $message2 = "<html><head><title>Confirmation d'envoi du message sur le formulaire du site www.christianmarquay.com</title></head>
                        <body><p>Bonjour,</p><p>Le message : \"" . $message[0] . $message[1] . "</p><p>" . $message[2] . "</p></body></html>";
            mail($email, "Confirmation d'envoi", $message2, $headers);
            $headers .= "\r\nFrom: " . $name . " <" . $email . ">";
            mail("christianmarquay@hotmail.com", $subject, $message1, $headers);
            $affichage = "Votre message a bien été envoyé, vous allez recevoir une confirmation par email.";
        } else {
            $affichage = "Adresse email incorrecte !";
        }
    } else {
        echo "<script type=\"text/javascript\">";  //traitement javascript
        echo "alert(\"Complétez tous les champs\");";
        echo "window.history.back();";
        echo "</script>";
    }
}
include_once("header.php");
?>

    <div class="jumbotron jumbotron-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2 class="h2">
                        Contactez-moi
                        <small>N'hésitez pas à me contacter</small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nom</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Entrez votre nom"
                                           required="required"/>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Adresse e-mail</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Entrez votre adresse e-mail" required="required"/></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Thématique</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="selected">Choisissez-en une :</option>
                                        <option value="cmi">Cursus Master Ingénierie</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea id="message" name="message" class="form-control" rows="9" cols="25"
                                              required="required"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactMe" name="send">
                                    Envoyer le message
                                </button>
                            </div>
                            <?php echo "<p class=\"col-md-12\">" . $affichage . "</p>"; ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <fieldset>
                        <legend><span class="glyphicon glyphicon-globe"></span> Mon adresse</legend>
                        <address>
                            <strong>Christian MARQUAY</strong><br>
                            78, rue Lucile<br>
                            17000 LA ROCHELLE<br>
                            <abbr title="Téléphone">
                                Tel :</abbr>
                            (+33) 6.98.34.07.16
                        </address>
                        <address>
                            <strong>Adresse e-mail</strong><br>
                            <a href="mailto:christianmarquay@hotmail.com">christianmarquay@hotmail.com</a>
                        </address>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<?php include_once("footer.php"); ?>