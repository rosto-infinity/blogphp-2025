<?php
session_start();
require_once 'database/database.php';

// 1-On affiche le titre

$pageTitle ="S'inscrire dans le Blog"; 

// Debut du tampon de la page de sortie
 
ob_start();

// inclure le layout de la page register
require_once 'layouts/articles/register_html.php';

//recuperation du contenu du tampon de la page register
$pageContent = ob_get_clean();

//Inclure le layout de la page de sortie
require_once 'layouts/layout_html.php';