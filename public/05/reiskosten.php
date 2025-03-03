<?php
function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs) {
    // Hier gaan we de berekening toevoegen:
    $kosten_euro = 0;

    // Berekening van de kosten
    $verbruik = $afstand_km / $km_per_liter;
    $kosten_euro = $verbruik * $liter_prijs;

    return $kosten_euro;
}
?>