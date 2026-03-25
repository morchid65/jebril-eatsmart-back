<?php
class ArticleModel {
    private $pdo;

    public function __construct() {
        try {
            // Connexion à TA base de données jebril_eatsmart
            $this->pdo = new PDO("mysql:host=localhost;dbname=jebril_eatsmart;charset=utf8", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die(json_encode(["error" => "Connexion BDD échouée : " . $e->getMessage()]));
        }
    }

    public function getDBAllArticles() {
        // On récupère tout de la table article
        $stmt = $this->pdo->query("SELECT * FROM article");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}