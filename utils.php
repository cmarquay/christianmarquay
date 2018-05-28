<?php
function checkEmail($email)
{
    return preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email);
}

function checkPhone($phone)
{
    return preg_match("#^0[1-9]([-. ]?[0-9]{2}){4}$#", $phone);
}