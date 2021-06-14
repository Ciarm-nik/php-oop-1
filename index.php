<?php
include "./classes/server.php";

$killBill = new Movie("Kill Bill", "Tarantino", "2003");
$django = new Movie("Django Unchained ", "Tarantino", "2012");



// var_dump($killBill);
// var_dump($django);

// var_dump($killBill->dettagliMovie());
// var_dump($django->dettagliMovie());

$killBill->printMovie();
$django->printMovie();


