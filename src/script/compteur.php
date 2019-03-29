<?php
    $monfichier = fopen('admin/compteur.txt', 'r+');
    
    $page_vues = fgets($monfichier);
    $page_vues += 1;
    fseek($monfichier, 0);
    fputs($monfichier, $page_vues);
    
    fclose($monfichier);
?>