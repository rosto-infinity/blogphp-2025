<?php
session_start();
require_once 'database/database.php';


// 1-On affiche le titre

$pageTitle ="Se connecter dans le Blog"; 

// 2-Debut du tampon de la page de sortie
 
ob_start();

// inclure le layout de la page login
require_once 'layouts/articles/login_html.php';

//recuperation du contenu du tampon de la page de login
$pageContent = ob_get_clean();

//Inclure le layout de la page de sortie
require_once 'layouts/layout_html.php';