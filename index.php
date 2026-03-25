<?php
// --- SECURITÉ : AUTORISATION DU FRONT-END (CORS) ---
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Si c'est une requête de pré-vérification (OPTIONS), on s'arrête là
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

require_once __DIR__ . '/Controllers/ArticleController.php';

$articleController = new ArticleController();

// Système de routage simple via le paramètre ?page=
if (isset($_GET["page"]) && $_GET["page"] === "articles") {
    $articleController->getAllArticles();
} else {
    http_response_code(404);
    echo json_encode(["error" => "Route non trouvée. Utilisez ?page=articles"]);
}