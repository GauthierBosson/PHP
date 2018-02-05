<?php
$chaine = "1234545454545";
$recherche = "/(45){2,5}/";

if (preg_match($recherche, $chaine)) {
    echo "Pattern trouvé";
}

else {
    echo "Pattern non trouvé";
}

/*
[[:lower:]] //minuscules
[[:upper:]] //majuscules
[[:alpha:]] //alphabétiques
[[:digit:]] //digit [0-9]
[[:alnum:]] //chiffres et lettres
[[:ascii:]] //ASCII
[[:blank:]] //espace ou tabulation
[[:punct:]] //imprimables sauf chiffres et lettres
[[:graph:]] //imprimables sauf espace
[[:space:]] //espace blanc
*/