<?php
// 1-Démarre une nouvelle session ou reprend une session existante
session_start();

// 2Inclut le fichier de connexion à la base de données
require_once 'database/database.php';

// 3-Définit le titre de la page
$pageTitle = "Éditer un article";

// Démarre la mise en tampon de sortie pour capturer le contenu HTML
ob_start();

// Inclut le fichier HTML pour éditer un article
require 'templates/articles/edit-article_html.php';

// Récupère le contenu mis en tampon et le stocke dans la variable $pageContent
$pageContent = ob_get_clean();

// Inclut le modèle de mise en page HTML qui affichera le contenu de la page
require 'templates/layout_html.php';
