# 🔌 EatSmart - Back-end (API)

API REST développée en PHP pour gérer le catalogue d'articles du restaurant EatSmart.

## 📋 Pré-requis
- WAMP / XAMPP / Laragon
- MySQL / MariaDB
- VirtualHost configuré : `eatsmart-back.local`

## 🗄️ Base de données
Le script SQL de création est disponible dans le fichier `jebril_eatsmart.sql`.
- **Nom de la base** : `eatsmart_db`
- **Table** : `articles`

## 📡 Points d'accès (Endpoints)
- `GET /index.php?page=articles` : Récupère tous les plats.
- `GET /index.php?page=articles/id` : Récupère un plat spécifique.

## 🧪 Tests
Une collection **Postman** (`articles.postman_collection.json`) est incluse à la racine pour tester les routes et valider les réponses JSON.
