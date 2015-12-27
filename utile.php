<?php
    function VerifierAdresseMail($adresse) {
        if(preg_match("#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#",$adresse)) {
            return true;
        } else {
            return false;
        }
    }
?>