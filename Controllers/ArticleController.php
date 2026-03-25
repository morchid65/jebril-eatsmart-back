<?php
require_once __DIR__ . '/../Models/ArticleModel.php';

class ArticleController {
    private $model;

    public function __construct() {
        $this->model = new ArticleModel();
    }

    public function getAllArticles() {
        $articles = $this->model->getDBAllArticles();
        
        // On précise au navigateur qu'on envoie du JSON
        header('Content-Type: application/json');
        echo json_encode($articles);
    }
}