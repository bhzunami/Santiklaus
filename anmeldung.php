<?php
$name = $_POST['name'];
$vorname = $_POST['vorname'];
$adresse = $_POST['adresse'];
$eMail = $_POST['eMail'];
$ort = $_POST['ort'];
$anzKinder = $_POST['anzKinder'];
$wunschTag = $_POST['wunschtag'];
$wunschZeit = $_POST['wunschZeit'];
$telefon = $_POST['telefon'];
$verif_box = $_POST["verif_box"];
$header = 'From: santiklaus@st-benno.ch' . "\r\n" .
  'Reply-To: nmauchle@gmail.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

function validation($value) {
  if ( $value == "") {
    return false;
  } else {
    return true;
  }
}

// check to see if verificaton code was correct
if(md5($verif_box).'a4xn' == $_COOKIE['tntcon']){
  // if verification code was correct send the message and show this page
  if( validation($name) || validation($vorname) || validation($adresse) 
      || validation($eMail) || validation($anzKinder) ) {
    $nachricht = "Name: ".$name."\n
Vorname: ".$vorname."\n
E-Mail: ".$eMail."\n
Telefon: ".$telefon."\n
Adresse: ".$adresse."\n
Ort: ".$ort."\n
Anzahl Kinder: ".$anzKinder."\n
Wunschtag: ".$wunschTag."\n
Wunschzeit: ".$wunschZeit."\n";
    mail("nmauchle@gmail.com", "Neue Santiklaus Anmeldung", $nachricht, $header );
    include 'mailBack.php';
    include 'danke.html';
      //    echo 'Danke für Ihre Bestellung. Falls Sie bis zum 26. November 2010 nichts hören, melden Sie sich ier.';
  } else {
    include 'error.html';
    exit;
  }
   // delete the cookie so it cannot sent again by refreshing this page
  setcookie('tntcon','');
} else if( !validation($name) || !validation($vorname) || !validation($adresse) 
   || !validation($eMail) || !validation($anzKinder) ){
  include 'error.html';
  exit;
} else {
  include 'error2.html';
  exit;
}

?>