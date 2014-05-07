<?php
    $nachricht = "Vielen Dank Herr/Frau ".$vorname." ".$name." für Ihre Bestellung:\n
Diese Daten haben wir von Ihnen erhalten:\n
===========================================\n
Name: ".$name."\n
Vorname: ".$vorname."\n
E-Mail: ".$eMail."\n
Telefon: ".$telefon."\n
Adresse: ".$adresse."\n
Ort: ".$ort."\n
Anzahl Kinder: ".$anzKinder."\n
Wunschtag: ".$wunschTag."\n
Wunschzeit: ".$wunschZeit."\n
===========================================\n
Wenn Sie noch Fragen haben, können Sie diese an santiklaus@st-benno.ch stellen.\n\n
Mit freundlichen Grüssen\n
Pfadi St. Benno";
    mail($eMail, "Ihre Santiklaus-Anmeldung", $nachricht, $header );

?>