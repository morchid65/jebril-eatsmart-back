<?php
// --- CONFIGURATION CORS ---
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

// --- INCLUSIONS ---
require_once __DIR__ . '/Controllers/ArticleController.php';

$articleController = new ArticleController();

// --- ROUTAGE ---
$page = isset($_GET["page"]) ? $_GET["page"] : null;

if ($page === "articles") {
    $articleController->getAllArticles();
} 
// BESOIN N°3 V4 : Nouvelle route pour enregistrer la commande
elseif ($page === "commandes" && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lecture du JSON envoyé par le Front
    $json = file_get_contents('php://input');
    $donnees = json_decode($json, true);
    
    header('Content-Type: application/json');
    echo json_encode([
        "message" => "Besoin V4 Validé : Commande reçue !",
        "payload" => $donnees
    ]);
} 
else {
    http_response_code(404);
    echo json_encode(["error" => "Route non trouvée. Utilisez ?page=articles ou ?page=commandes"]);
}