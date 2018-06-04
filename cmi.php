<?php
if (isset($_GET['document']) AND ($_GET['document'] == "Amazon" OR $_GET['document'] == "NewCMIst")) {
    $document = addslashes(htmlentities($_GET['document']));
} else {
    header('Location: index.php');
}
$title = "CMI - " . $document;
$description = "Documents rédigés dans le cadre du Cursus Master Ingénierie conférant une vision ample, une grande capacité d’adaptation et une facilité de communication.";
include_once("header.php");
?>

    <main class="row">
        <?php
        echo "<object class=\"col-xs-8 col-xs-offset-2\" data=\"documents/" . $document . ".pdf\" type=\"application/pdf\">";
        echo "<p>Télécharger : <a href=\"documents/" . $document . ".pdf\">Fichier " . $document . ".pdf</a></p>";
        ?>
        </object>
    </main>
<?php include_once("footer.php"); ?>