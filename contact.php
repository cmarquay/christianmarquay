<?php
$titre = "Contact";
$description = "Contacter Christian MARQUAY, par messagerie interposée, par les réseaux sociaux, ou par un autre site web.";
$h2 = "Email et réseaux sociaux";
require "header.php";
?>
    <main>
        <section class="form">
            <h3>CONTACT</h3>
            <p>Pour tous commentaires, demandes, questions, et retours, merci d'utiliser le formulaire suivant.<br/><br/>Bientôt actif</p>
            <form id="formulaire" enctype="multipart/form-data" method="post" action="contact.php">
                <p><label for="edtNom" id="idNom">NOM</label></p>
                <p><input type="text" id="edtNom" name="nom" required /></p>
                <p><label for="edtEmail" id="idEmail">ADRESSE EMAIL</label></p>
                <p><input type="email" id="edtEmail" name="email" required /></p>
                <p><label for="edtSujet" id="idSujet">SUJET</label></p>
                <p><input type="text" id="edtSujet" name="sujet" required /></p>
                <p><label for="edtMessage" id="idMessage">MESSAGE</label></p>
                <p><textarea id="edtMessage" name="message" required ></textarea></p>
                <p class="submit"><input type="submit" id="btnSubmit" value="Envoyer le message" /></p>
            </form>
        </section>
        <section>
            <h3>RESEAUX SOCIAUX</h3>
            <p><a href="https://twitter.com/cmarquay" target="_blank">a</a></p>
            <p><a href="https://www.facebook.com/christian.marquay" target="_blank">b</a></p>
            <p><a href="https://plus.google.com/115524854095572428825" target="_blank">c</a></p>
            <p><a href="https://www.linkedin.com/in/christian-marquay-8903799a" target="_blank">j</a></p>
            <p><a href="https://fr.viadeo.com/fr/profile/christian.marquay" target="_blank">k</a></p>
        </section>
    </main>
    </body>
</html>
