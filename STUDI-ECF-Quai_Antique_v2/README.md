# STUDI-ECF-Quai_Antique_v2

# Le Quai Antique

Bienvenue sur le site Web de notre restaurant "Le Quai Antique", situé à Chambéry. Sur notre site, vous pouvez réserver une table en ligne, consulter notre carte et découvrir notre univers culinaire.

## Technologies utilisées

Ce site web a été développé en utilisant les technologies suivantes :

- Symfony 6 / PHP 8.1 / EasyAdmin : pour la gestion du contenu du site
- HTML / CSS / JavaScript : pour la mise en page et les interactions utilisateur
- Bootstrap : pour la création d'un design réactif et mobile-friendly

## Projet crée par

- Yoni-Alexandre Brault : développeur / designer

## Importer et configurer le projet "Quai Antique"

- Ce guide vous expliquera comment importer le projet Symfony "Le Quai Antique" à partir de GitHub et le configurer avec une base de données SQL et des fixtures.

## Prérequis

- Avoir installé Composer
- Avoir un compte GitHub et avoir installé Git sur votre ordinateur

## Etapes pour l'installation du projet "Quai Antique"

- Ouvrez votre terminal et rendez-vous dans le répertoire où vous souhaitez importer le projet.
- Clonez le dépôt GitHub en utilisant la commande suivante :

```git clone https://github.com/USERNAME/REPO_NAME.git```

- Une fois le dépôt cloné, rendez-vous dans le répertoire du projet avec la commande :

```cd REPO_NAME```

- Installez les dépendances du projet avec Composer en utilisant la commande :

```composer install```

- Créez un fichier .env à partir du fichier .env.example en utilisant la commande :

```cp .env .example .env```

- Ouvrez le fichier .env et modifiez les paramètres de configuration de la base de données en fonction de votre environnement local.

- Mettre en route le serveur de base de données (Laragon, XAMPP, WAMPP etc..)

- Créez la base de données en utilisant la commande :

```symfony console doctrine:database:create```

- Exécutez les migrations de la base de données en utilisant la commande :

```symfony console doctrine:migrations:migrate```

- Et voilà, votre projet Symfony est maintenant importé et configuré avec une base de données SQL et des fixtures ! Vous pouvez maintenant lancer le serveur de développement avec la commande :

```symfony serve:start```

- Et accéder à l'application en ouvrant votre navigateur à l'adresse http://localhost:8000.

