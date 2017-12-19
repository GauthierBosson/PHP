<?php
$valeur = mt_rand(-10000, 10000);

echo("<p>La valeur test est : $valeur</p>");

if ($valeur < 0)
    $message = "La valeur est négative";

elseif ($valeur > 0)
    $message = "La valeur est positive";

else
    $message = "La valeur est nulle";

for ($i = 1; $i <= 10; $i++) {
    if ($valeur % $i == 0)
        $message .= "<p>$valeur est un multiple de $i</p>";
}

echo($message);

