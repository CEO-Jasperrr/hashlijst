<?php
$aantal = 0;
print_r ("het werkt");
$m = FILE($_FILES['userfile']['tmp_name']); // haalt het bestand op uit Input.php

print "<pre>";
print_r ($m);
print "</pre>";

foreach ($m as $zinnen){ //per rij van $m
    $aantal = $GLOBALS['aantal'];
    $zinnen = trim($zinnen);
    $woorden = preg_split("/[ .!?,1234567890()	_=+><-]+/", $zinnen); //haalt de woorden uit elkaar
    if (($woord = array_search('', $woorden))!== false) {
        unset($woorden[$woord]);
    }
    print "<pre>";
    print_r ($woorden);
    print_r (array_count_values($woorden)); // laat zien welke woorden hoevaak voorkomen
    print "</pre>";
    $aantal = $aantal + (count($woorden)); // voegt woorden uit huidige zin aan $aantal toe binnen de functie
    $GLOBALS['aantal'] = $aantal; // verandert $aantal in het hele bestand
};
Print_r ($aantal);