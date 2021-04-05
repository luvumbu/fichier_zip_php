<?php
 
$file='giphy.zip';
$path='.';
 
$zip=new ZipArchive;
 
$res=$zip->open($file);
 
if ($res === TRUE)
{
    $zip->extractTo($path);
    $zip->close();
    echo "Fichier $file extrait avec succès dans $path";
} else {
    echo "Echec de l'extraction du fichier $file";
}
 
?>