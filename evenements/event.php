<?php
    $json = file_get_contents("evenements/fichier.json");
    $json_data = json_decode($json);


// // Définition du chemin à explorer (adaptez a votre environnement)
//    $homedir = dirname(__FILE__);
// // "ouverture" du répertoire
//    $dir = @opendir($homedir);
// // Récupération d'un pointeur sur le premier
//    // fichier (ou sous-répertoire) du répertoire grâce à readdir.
//    // Lorsque nous aurons atteint la fin de répertoire
//    // readdir retournera faux par conséquent
//    // la boucle s'arrêtera
//    while ($file = readdir($dir)) {
// 	// 	Affichage du nom du fichier (ou sous-répertoire)
// 		       // 	sauf "." et ".."
// 		       if (($file != ".") && ($file != "..")) echo "$file<br/>";
//     }
// // C'est fini. On ferme !
//    closedir($dir);
?>