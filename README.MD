
## Installation :

* #### Cloner le projet dans votre répertoire
	`git clone https://forge.univ-lyon1.fr/p1911249/movie-database-isi2 Netflix`
* #### Créer un utilisateur

	> Il suffit de lancer le script **createUser.sql** dans datagrip.

* #### Modifier le fichier env

	> Se déplacer dans le dossier **netflix** puis copier-coller le fichier **.env.example** en le renommant **.env**. 
	>Modifier le fichier **.env** comme ci-dessous.
	
	![env](resources/env.png)
* #### Actualiser la clé du projet
	`php artisan key:generate`
* #### Créer les migrations

	> Lancer la commande suivante :
	
	`php artisan migrate`
* #### Insérer les données dans la base de donnée

	> Lancer le script **netflix.sql** dans datagrip.
	
* #### Lancer le serveur local
	`sudo service mysql start`
	`sudo service apache2 start`
* #### Vérifier que tout fonctionne 😉

	> Aller à l'adresse http://localhost/web/Netflix/netflix/public/home
  
    
    
## Introduction :


Nous avons choisi de faire une copie de Netflix. Ainsi, notre site web regroupe différents films et séries du service de streaming. L’utilisateur pourra ainsi parcourir le contenu proposé sur notre site, et accéder à ces informations.
Nous avons choisi un jeu de données provenant du site [kaggle](https://www.kaggle.com/datasets/shivamb/netflix-shows) et regroupant les informations dont nous avons besoin. Par la suite, nous avons dû traiter ce jeu à l’aide de scripts python, en le séparant en 7 fichiers **csv**, chacun représentant une table de notre base de données afin de pouvoir l’importer par la suite. De plus le jeu de données étant relativement important (+8000 show), nous avons choisi de nous restreindre à 150 shows.
Notre base de données contient quant à elle 7 tables, représentées ci-dessous.
![base de données](resources/tables.png)

## Description des tables :

* La table **show** contient les informations du show.
* La table **genres** contient les différentes catégories que peut avoir un show (ex : Horreur).
* La table **acteurs** contient les acteurs ayant joué dansdes shows.
* La table **directeurs** contient les directeurs ayantdirigé des shows.
* La table **types** contient les deux types que peuventprendre un show (TV show ou Movie).
* Les tables **appartenances** et **participations** permettentde lier les tables acteurs et genres avec la table shows afin d’avoir des relations 1..n au lieu de n..n.

  

## Le fonctionnement du site :

  

La page d’accueil est la suivante, elle permet d’afficher les films et séries de 3 genres différents, les animés, les films romantiques et les films d’horreur. 
![home page](resources/home.png)

Nous voyons également notre barre de navigation accueillant 3 liens de navigation ainsi que ceux de connexion que nous détaillerons par la suite. Cette barre est présente sur toutes les pages du site grace aux layouts. Si nous cliquons sur le lien “Films” nous accédons à une page regroupant tous les films de la base de données.
![movies](resources/movies.png)

De même pour le lien “Séries”:
![series](resources/series.png)
  
Si nous cliquons sur un film sans être connecté, on nous propose de nous connecter pour accéder au contenu du programme.
![auth](resources/auth.png)
  
Cliquons alors sur le lien “Se connecter”.
![login](resources/login.png)

On remarque dans la barre de navigation que l'utilisateur est bien connecté car son nom apparaît.
![logged](resources/logged.png)
  
Nous pouvons donc cliquer sur un film pour accéder à son contenu.
![show](resources/show.png)
  
A partir de cette vue nous pouvons accéder à la page des acteurs en cliquant le nom d’un de ces derniers. On clique ici sur l’actrice “Chie Nakamura”, on a donc accès à tous les films dans lesquels elle à joué.
![acteur](resources/acteur.png)
  
En revenant sur la page de contenu d’un programme on peut cliquer sur un des “Genres” pour accéder à la page contenant tous les films appartenant à ce genre. Ici nous avons cliqué sur le genre “International Movies”.
![genre](resources/genre.png)

## Les modèles :

Nous avons 8 modèles Acteur, Appartenance, Directeur, Genre, Participation, Show, Type et User. Chacun d'eux est liée à une table de notre base de données. Voici la représentation de nos modèles dans Laravel.


## Les vues :

Nous utilisons un seul layout “homeLayout.blade.php”, les autres sont ceux créés automatiquement par laravel. Il permet de définir pour toutes les vues la même structure de page, c'est-à-dire la navbar et le footer.
Nous avons 6 vues et chacune d’elle est associée à une page du site:

* La vue **acteurs** permet d’afficher les film d’un acteur.
* La vue **genres** permet d’afficher les films d’un mêmegenre.
* La vue **index** est la page d’accueil qui affiche plusieurs films de notre BD.
* La vue **movies** permet d’afficher tous les films dela BD.
* La vue **show** permet d’afficher les informations d’unshow.
* La vue **tv** permet d’afficher toutes les séries de laBD.
 

## Les contrôleurs :


Nous avons créé 7 contrôleurs : ActeurController, DirecteurController, GenreController, MovieController, ShowController, TvController, TypeController.

  

 * Le contrôleur **show** a deux méthodes. 
	* La méthode *index* renvoie trois types de show différents, des animes, des horreurs et des romantiques.
	* La méthode *show* qui prend en paramètre l’id d’un show. Et qui renvoie toutes les informations liée à celui-ci (acteurs, directeurs, descriptions, nom, ...).
* Le contrôleur **acteur** a une méthode *show* prenant enparamètre l’id d’un film. Afin de nous permettre de récupérer tous les acteurs qui ont joué dans ce film. 
* Le contrôleur **genre** a une méthode *show* qui prend en paramètre l’id d’un film. Et qui retourne les films ayant le même genre que celui passé en paramètre.
* Le contrôleur **TV** à une méthode index qui récupèretous les show ayant le type 2 (TV show).
* Le contrôleur **Movie** à une méthode index qui renvoietous les films de la base de données.

  
  

## Les routes :

  

Voici nos 7 routes, associées à chacune des pages de notre site. 
![routes](resources/routes.png)

Les deux premières servent à afficher la page d’accueil. les 4 suivantes affichent leur page éponymes. Enfin la dernière permet de gérer l’authentification.

## Les migrations :

Les fichiers de migrations sont disponible dans le fichier suivant:
`netflix/database/migrations`

  
## Les étapes du développement :

#### Etape 1 : Création du jeu de données

* Les données sont déjà traitées et se trouvent à cette adresse : https://drive.google.com/drive/folders/1GBvPxFjbS2b6-ORUMNDf-oPY7trhv2xp?usp=sharing
    
#### Etape 2 : Création des model

* php artisan make:model Acteur --migration
* php artisan make:model Appartenance --migration
* php artisan make:model Directeur --migration
* php artisan make:model Genre --migration
* php artisan make:model Participation --migration
* php artisan make:model Show --migration  
* php artisan make:model Type --migration
   
#### Etape 3 : Création des migrations

* Les fichiers migrations sont disponibles dans le répertoire netflix/database/migrations/
 

#### Etape 4 : Insertion du jeu de données dans la BD

* Il faut utiliser le fichier d’insertion de données netflix.sql
    
#### Etape 5 : Création des contrôleurs

* La plupart des contrôleurs sont déjà créés. Cependant, certains sont à implémenter. Puis, il faudra ajouter les méthodes correspondantes à chacun des contrôleurs, disponibles dans le répertoire netflix/app/Http/Controllers
    
#### Etape 6 : Création des vues et des templates

* Les vues et les templates sont disponibles dans le répertoire suivant, netflix/resources/views
   
#### Etape 7 : Création des routes

* Les routes sont disponibles dans le fichier suivant netflix/routes/web.php.