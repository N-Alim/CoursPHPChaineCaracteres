<?php
/*
echo ord('F'); // Affiche code ASCII
echo chr(101); // Affiche caractère depuis code ASCII
*/

/*
$version = 8;
$langue = "fr";
$url = "PHP %d est disponible sur l'adresse https://%s.php.net";
printf($url, $version, $langue);

$reponse = sprintf($url, $version, $langue);
echo $reponse;

printf("<br />");
printf("%b <br />", 3);
printf("%o %x <br />", 15, 20);
printf("%03d <br />", 2); // Affiche 002
printf("%03d <br />", 20); //Afficge 020
printf("[%-10.9s]\n", "Bonjour");

$fr = "%d est la version de %s";
$en = "%d is %s's version";

$langue = $fr;

if ($langue === "en") 
{
    printf($en, 8.1, "PHP");
} 
else 
{
    printf($fr, 8.1, "PHP");
}

echo "<hr />";

// Affiche une chaîne depuis une entrée sous forme de tableau
$infos = ["PHP", round(8.1, 1)];
vprintf("%s %.2f <br />", $infos);

// Accès à un caractère précis
$texte = "Je me prénomme Frédéric";
echo $texte[0];
echo "<br />";
echo strlen($texte);
echo "<br />";
echo mb_strlen($texte);
echo "<br />";
echo str_word_count($texte); // Ne traite pas les accents

$mail = "contact@raspberry.com";
$position = strpos($mail, "@");
if ($position === false)
{
    echo "Il manque @";
}

else
{
    echo "@ ne manque pas";
}
*/

$html = "<h1><a href='index.php'>Page index<a/></h1>";
echo "Texte : " . $html . "<br />";
echo "Texte : " . strip_tags($html, "<a>") . "<br />"; // 2ème paramètre: tags autorisés

// Conventions d'affichage locales
// setlocale(catégorie, localité);
setlocale(LC_ALL, 'fr_FR', "fr", "FR", "fr_FR@euro");
echo strstr("toto@gmail.com", '@'); //Affiche @gmail.com
echo "<br />";
echo substr("toto@gmail.com", 4, 2); //Affiche @g
echo "<br />";

// Remplacer un motif par un autre
/*
$texte = "Je fais du PHP";
$cherche = "PHP";
$remplace = "code";
echo str_replace($cherche, $remplace, $texte);
*/

$texte = "pomme, poire, kiwi, banane";
$cherche = array("pomme", "poire", "kiwi", "banane");
$remplace = "fruit";
echo str_replace($cherche, $remplace, $texte);