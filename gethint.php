<?php
// Array with names
$a[] = "Afzal";
$a[] = "Bony";
$a[] = "Cindrella";
$a[] = "Doll";
$a[] = "Ehsan";
$a[] = "Fujy";
$a[] = "Gus";
$a[] = "Hega";
$a[] = "Inss";
$a[] = "Jossnna";
$a[] = "Kissy";
$a[] = "Liffa";
$a[] = "Nidd";
$a[] = "Opdddlia";
$a[] = "Peffia";
$a[] = "Amggda";
$a[] = "Raqqel";
$a[] = "Citty";
$a[] = "Dohgs";
$a[] = "Ecfe";
$a[] = "Edfta";
$a[] = "Succva";
$a[] = "Togt";
$a[] = "Uncd";
$a[] = "Viobbet";
$a[] = "Libg";
$a[] = "Elibbabeth";
$a[] = "Elvvd";
$a[] = "Wegdhe";
$a[] = "Vigry";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>