# Arcadia-Zoo
Le projet vise à créer une application web pour le zoo Arcadia en utilisant le framework Symfony. Cette application permettra aux visiteurs de consulter les informations sur les habitas, les animaux, les services disponibles, ainsi que les horaires du zoo.
## Environnement de développement

### Pré-requis

* PHP 8.2
* Composer
* Serveur Web (Apache / Nginx)
* Mysql


### Exécution du projet en local

1. Installation de PHP 8.2 :

Téléchargez et installez PHP 8.2 sur votre système. Vous pouvez le télécharger depuis le site officiel de PHP (https://www.php.net/downloads).
Suivez les instructions d'installation pour votre système d'exploitation.

2. Assurez-vous que MAMP est installé et fonctionne correctement :

Téléchargez et installez MAMP depuis le site officiel et assurez-vous que les serveurs Apache et MySQL sont démarrés dans MAMP.

3. Configuration de MAMP pour utiliser PHP 8.2 :

* Ouvrez MAMP et accédez aux préférences.
* Allez dans l'onglet "PHP" ou "Serveur" selon la version de MAMP.
* Vous devriez voir une liste des versions de PHP installées. Sélectionnez PHP 8.2 dans la liste.

4. Redémarrez les serveurs MAMP :

Après avoir sélectionné PHP 8.2 dans les préférences de MAMP, redémarrez les serveurs Apache et MySQL de MAMP.

5. Installation de Composer :

Téléchargez et installez Composer si vous ne l'avez pas déjà fait. Vous pouvez le faire en suivant les instructions sur le site officiel de Composer (https://getcomposer.org/download/).

6. Déplacer le code source de projet Symfony :

Localisez le répertoire de votre projet Symfony sur votre système de fichiers.
Copiez l'ensemble du contenu du répertoire de votre projet Symfony (y compris les fichiers et dossiers cachés) vers le répertoire htdocs de MAMP. Vous pouvez trouver le répertoire htdocs dans le dossier où MAMP est installé sur votre système.

7. Importer la base de données dans phpMyAdmin de MAMP :

* Assurez-vous que les serveurs Apache et MySQL de MAMP sont démarrés.
* Utilisez les identifiants de connexion MySQL que vous avez configurés dans MAMP pour vous connecter à phpMyAdmin.
* Cliquez sur l'onglet "Import" dans la barre de navigation supérieure de phpMyAdmin.
* Sélectionnez le fichier de votre base de données à importer en cliquant sur le bouton "Parcourir" ou en le faisant glisser-déposer.
* Cliquez sur le bouton "Exécuter" pour importer la base de données.

8. Configuration du fichier .env de votre projet Symfony :

* Accédez au répertoire racine de votre projet Symfony.
* Ouvrez le fichier .env dans un éditeur de texte.
* Trouvez la variable DATABASE_URL dans le fichier .env
* Mettez à jour cette variable avec les informations de connexion à votre base de données MySQL importée dans phpMyAdmin.

9. Lancer le projet

* Utilisez la commande suivante pour démarrer le serveur Symfony intégré :
``` bash
php bin/console server:run

```
* Une fois que le serveur Symfony est démarré, ouvrez un navigateur web, accédez à votre projet Symfony en saisissant l'URL indiquée dans la sortie de la commande précédente. Par défaut, cela devrait être quelque chose comme http://localhost:8000.

### les fichiers de création et d’alimentation de la base de données (migrations & fixtures )

* Migrations :  Naviguer vers le répertoire des migrations (/migrations)
* Fixtures : Naviguer vers le répertoire des fixtures  (/src/DataFixtures/)

### Création d’un administrateur pour le back-office

* Ouvrez le fichier de la fixture (src/DataFixtures/AdminFixtures.php)
* Modifiez la méthode load() pour créer l'utilisateur admin avec le rôle (ROLE_ADMIN)
* Exécutez la commande suivante pour charger les fixtures dans la base de données :
``` bash
php bin/console doctrine:fixtures:load

```

### Données de connexion par défaut:

``` bash
Email admin@arcadia.com
Password Arcadia123?

```





## Schéma Base de données
Vous trouverez le schéma de base de données ici : https://dbdiagram.io/d/Arcadia-Zoo-66edcd7da0828f8aa68c4f80

### Liens
* Le lien du  dépôt Github : https://github.com/Dr-nor/Arcadia-Zoo
* Le lien de la version en ligne de l’application web : https://interesting-nobel.212-227-162-75.plesk.page/
* Le lien vers votre logiciel de gestion de projet(Trello) : https://trello.com/invite/b/66d4cf8b56e42ff5acb78071/ATTIec186db29fac6e203766bab10209002e76D48FB2/arcadia-zoo