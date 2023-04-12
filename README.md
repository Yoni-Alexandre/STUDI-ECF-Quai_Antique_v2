# STUDI-ECF-Quai_Antique_v2

# Le Quai Antique

Bienvenue sur le site Web de notre restaurant "Le Quai Antique", situé à Chambéry. Sur notre site, vous pouvez réserver une table en ligne, consulter notre carte et découvrir notre univers culinaire.

## Technologies utilisées

Ce site web a été développé en utilisant les technologies suivantes :

- Symfony 6 / PHP 8.1 / EasyAdmin 4 : pour la gestion du contenu du site
- HTML / CSS / JavaScript : pour la mise en page et les interactions/animations de l'utilisateur
- Bootstrap : pour la création d'un design réactif et mobile-friendly

## Projet crée par

- Yoni-Alexandre Brault : Développeur / Designer

## Importer et configurer le projet "Quai Antique"

- Ce guide vous expliquera comment importer le projet Symfony "Le Quai Antique" à partir de GitHub et le configurer avec une base de données SQL.

## Prérequis

- Avoir installé Composer
- Avoir un compte GitHub et avoir installé Git sur votre ordinateur
- Avoir un serveur web et une base de données SQL (Laragon, XAMPP, WAMPP etc..)

## Etapes pour l'installation du projet "Le Quai Antique"

- Ouvrez votre terminal (ou le terminal depuis votre IDE) et rendez-vous dans le répertoire où vous souhaitez importer le projet :

```cd /chemin/de/votre/projet```
 
- Clonez le dépôt GitHub en utilisant la commande suivante :

```git clone https://github.com/Yoni-Alexandre/STUDI-ECF-Quai_Antique_v2```

- Une fois le dépôt cloné, rendez-vous dans le répertoire du projet avec la commande :

```cd REPO_NAME```

- Installez les dépendances du projet avec Composer en utilisant la commande :

```composer install```

- Ouvrez le fichier .env et modifiez les paramètres de configuration de la base de données en fonction de votre environnement local.

- Mettre en route le serveur de base de données (Laragon, XAMPP, WAMPP etc..)

- Créez la base de données en utilisant la commande :

```symfony console doctrine:database:create```

- Exécutez les migrations de la base de données en utilisant la commande (Les migrations dans Symfony sont déjà créees):

```symfony console doctrine:migrations:migrate```

- Et voilà, le projet Symfony est maintenant importé et configuré avec une base de données SQL. 
- Vous pouvez maintenant lancer le serveur de développement avec la commande :

```symfony serve:start``` ou ```symfony serve -d``

- Et accéder à l'application en ouvrant votre navigateur à l'adresse http://localhost:8000.

## Création d'un Administrateur

- Depuis le site, aller dans "Inscription" et repmlir les champs puis valider l'inscription avec le bouton "M'inscrire"

- Depuis un terminal (sous réserve d'avoir configuré les variables d'environnement (sous Windows)), acceder à la base de données

```mysql -u root -p```

- Repmlir le mot de passe demandé (touche Entrée s'il n'y a pas de mot de passe dans le .env de l'application symfony)

- Se connecter à la base de données (nom inscrit dans le .env, pour ma part le nom de ma base est "studi_le_quai_antique")
- Pour voir les base de données existantes (SHOW DATABASES;)

```USE studi_le_quai_antique;```

- vérifier que les tables soient bien importées

```SHOW TABLES;```

- Controller la table "users" pour voir les champs sont remplis (si vide aucunes données ne seront visibles)

```SELECT * FROM users;```

- Créer un administrateur dans la table "users" en lui donnant le role "ROLE_ADMIN"

```INSERT INTO users (email, roles, password, lastname, firstname) VALUES ('admin@lequaiantique.neoliaweb.fr', '[\"ROLE_ADMIN"\]', '$2y$13$RztYrnXRCgAeF5r6PTBnjOQ7uvGXSTeaQhNUKKers.8JEQHn7EyEG', 'Admin', 'Le Quai Antique');```

- Le mot de passe crypté correspond à "123456"

- Depuis le site, se connecter en utilisant les identifiants suivants : admin@lequaiantique.neoliaweb.fr et le mot de passe "123456"

## #########################################################################################################
## POUR ALLER PLUS LOIN, D'AUTRES METHODES D'IMPORTATIONS ET CREATIONS (mais non nécessaire pour le projet) 
## #########################################################################################################

## Importer la base de données SQL (en mode console)
- Sous Windows, ajouter dans les variables d'environnement le chemin vers le dossier "bin" de votre serveur de base de données (Laragon, XAMPP, WAMPP etc..)
- Récupérer le fichier "studi_le_quai_antiqueV2.sql" dans le dossier "leQuaiAntiqueDatabase" du projet.
- Pour se connecter à mysql, il faut utiliser la commande suivante :

```mysql -u root -p```

- Une fois connecté, il faut créer une base de données "studi_le_quai_antique" :

```CREATE DATABASE studi_le_quai_antique;```

- Pour utiliser la base de données "studi_le_quai_antique", il faut utiliser la commande suivante :

```USE studi_le_quai_antique;```

- Pour importer la base de données, il faut utiliser la commande suivante :

```SOURCE /chemin/du/fichier/studi_le_quai_antiqueV2.sql;```

## Importer la base de données SQL (en mode visuel phpMyAdmin)
- Récupérer le fichier "studi_le_quai_antiqueV2.sql" dans le dossier "leQuaiAntiqueDatabase" du projet.
- Il faut au préalable créer une base de données "studi_le_quai_antique" dans votre serveur de base de données (Laragon, XAMPP, WAMPP etc..)
- Depuis phpMyAdmin, cliquer sur l'onglet "Importer" et sélectionner le fichier "studi_le_quai_antiqueV2.sql" pour importer la base de données.

## Création de la base de données SQL "studi_le_quai_antique" et de ses tables (en mode console)
- Se connecter à mysql en utilisant la commande suivante :

```mysql -u root -p```

- Laisser le champ "mot de passe" vide et appuyer sur "Entrée"
- 
- Créer la base de données "studi_le_quai_antique" en utilisant la commande suivante :
- 
```CREATE DATABASE studi_le_quai_antique;```

- Utiliser la base de données "studi_le_quai_antique" en utilisant la commande suivante :
- 
```USE studi_le_quai_antique;```

- Créer les tables de la base de données "studi_le_quai_antique" en utilisant les commandes suivantes :

- La table "bodies": 
```
CREATE TABLE `bodies` (
`id` int NOT NULL,
`image_title_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_property_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`content_image_one` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_title_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_property_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`content_image_two` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_title_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image_property_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`content_image_three` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
- La table "opening_hours":
```
CREATE TABLE `opening_hours` (
  `id` int NOT NULL,
  `bloc_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloc_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloc_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

- La table "products":
```
CREATE TABLE `products` (
  `id` int NOT NULL,
  `categories_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
- La table "catagories":
```
CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
- La table "headers":
```
CREATE TABLE `headers` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
- La table "home_illustrations":
``` 
CREATE TABLE `home_illustrations` (
  `id` int NOT NULL,
  `illustration_circle_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_illustration_circle_one` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_circle_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_circle_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url_circle_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration_circle_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_illustration_circle_two` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_circle_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_circle_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url_circle_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration_circle_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_illustration_circle_three` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_circle_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_circle_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url_circle_three` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
- la table "menus":
```
CREATE TABLE `menus` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_one` longtext COLLATE utf8mb4_unicode_ci,
  `option_two` longtext COLLATE utf8mb4_unicode_ci,
  `option_three` longtext COLLATE utf8mb4_unicode_ci,
  `option_four` longtext COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
- la table "reservations":
```
CREATE TABLE `reservations` (
  `id` int NOT NULL,
  `users_id` int DEFAULT NULL,
  `number_of_guest` int NOT NULL,
  `allergie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

- la table "users":
```
CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
-Création des clés primaires et étrangères:
```
ALTER TABLE `bodies`
  ADD PRIMARY KEY (`id`);
```
```
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);
```
```
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);
```
```
ALTER TABLE `home_illustrations`
  ADD PRIMARY KEY (`id`);
```
```
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);
```
```
ALTER TABLE `opening_hours`
  ADD PRIMARY KEY (`id`);
```
```
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B3BA5A5AA21214B7` (`categories_id`);
```
```
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4DA23967B3B43D` (`users_id`);
```
```
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);
```
- Création des autos incrémentations:
```
ALTER TABLE `bodies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
```
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
```
ALTER TABLE `headers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
```
ALTER TABLE `home_illustrations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
```
ALTER TABLE `menus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
```
ALTER TABLE `opening_hours`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
```
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
```
ALTER TABLE `reservations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
```
```
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
- Création des contraintes:
```
ALTER TABLE `products`
  ADD CONSTRAINT `FK_B3BA5A5AA21214B7` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
```
```
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_4DA23967B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;
```
