# IDF Mobilités

Un ecosysteme composé d'un serveur web en PHP avec l'architecture MVC, serveur reseau (non inclut ici), serveur BD et petite interface utilisateur, dans le contexte de la gestion des passes navigo dans les gares du transport ainsi que la plateforme web.

## Prérequis

Avant de commencer, assurez-vous d'avoir satisfait aux exigences suivantes :
- PHP installé (version 7.4.3)
- Composer installé (https://getcomposer.org/)
- PostgreSQL installé et en cours d'exécution

## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/Amina-bzr/ProjetBD-RES-Mobilite-IDF.git
   ```

2. Accédez au répertoire du projet :
   ```bash
   cd ProjetBD-RES-Mobilite-IDF
   ```

3. Installez les dépendances avec Composer :
   ```bash
   composer install
   ```

4. Configurez la connexion à votre base de données PostgreSQL :
   - Copiez le fichier `.env.example` en `.env` :
     ```bash
     cp .env.example .env
     ```

   - Ouvrez le fichier `.env` et mettez à jour les détails de connexion à PostgreSQL.


## Utilisation

Exécutez le projet en utilisant le serveur PHP intégré :
   ```bash
   php -S localhost:8000
   ```

Visitez `http://localhost:8000` dans votre navigateur web.


