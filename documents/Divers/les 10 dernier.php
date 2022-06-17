<?php



## Exercice 1 - Créez le MLD
D'après le brief du client, voici le MLD qui a été décidé :

```
USER
------
id
email
password
roles
firstname
lastname
city_id             # Dans quelle ville est l'utilisateur ?

RESTAURANT
------
id
name
description
created_at
city_id             # Quelle est la ville du restaurant ?
user_id             # Qui a créé le restaurant ?

CITY
-----
id
name
zipcode

RESTAURANT_PICTURE
-----
id
restaurant_id       # De quel restaurant est-ce la photo ?
name
file

REVIEW
-----
id
message
rating
created_at
user_id             # Qui a posé l'avis
restaurant_id       # Sur quel restaurant a t-il été posé
review_id           # Si c'est une réponse à un avis: quel est l'avis parent ?
```

Les relations sont :

Table A | Relation | Table B
---------|----------|---------
USER | `N:1` | CITY
RESTAURANT | `N:1` | CITY
RESTAURANT_PICTURE | `N:1` | RESTAURANT
REVIEW | `N:1` | USER
REVIEW | `N:1` | RESTAURANT
REVIEW | `N:1` | REVIEW

## Exercice 2 - Créez le projet Symfony
```
symfony new notaresto --full --version=lts
```

## Exercice 3 - Faites la liste des routes utiles au projet et leurs rôles
```
GET     /login                  anonyme
POST    /login                  anonyme
GET     /logout                 all
GET     /register               anonyme

GET     /restaurants            all
GET     /restaurant/new         restaurateur
POST    /restaurant             restaurateur
GET     /restaurant/{id}        all
DELETE  /restaurant/{id}        restaurateur, modérateur
GET     /restaurant/{id}/edit   restaurateur, modérateur
POST    /restaurant/{id}/edit   restaurateur, modérateur

GET     /reviews            modérateur
POST    /review             client, restaurateur
GET     /review/{id}        all
DELETE  /review/{id}        connecté
GET     /review/{id}/edit   connecté
POST    /review/{id}/edit   connecté

GET     /users            modérateur
GET     /user/{id}        connecté
DELETE  /user/{id}        connecté
GET     /user/{id}/edit   connecté
POST    /user/{id}/edit   connecté

GET     /cities           modérateur
POST    /city             modérateur
GET     /city/{id}        anonyme
DELETE  /city/{id}        modérateur
GET     /city/{id}/edit   modérateur
POST    /city/{id}/edit   modérateur


GET     /restaurant_pictures            modérateur
POST    /restaurant_picture             restaurateur, modérateur
GET     /restaurant_picture/{id}        all
DELETE  /restaurant_picture/{id}        restaurateur, modérateur
GET     /restaurant_picture/{id}/edit   restaurateur, modérateur
POST    /restaurant_picture/{id}/edit   restaurateur, modérateur
```

## Exercice 4 - Configurer le projet
### Ajouter le projet à Git

> Commits de correction :
> - https://github.com/tomsihap/notaresto/commit/d730addd1212c6070e777e4effe801db82e88e09

#### SANS Github Desktop
##### CRÉER LE PROJET ET FAIRE DES COMMIT/PUSH

###### a. Créer le projet sur Github
1. Créer le projet sur Github en allant sur [github.com > New](https://github.com/new)
2. Repository name: `notaresto`
3. Description : `Description de votre projet (par ex: TP Symfony lors de ma formation DWWM chez Human Booster)`
4. Public/Private: `selon la visiblité que vous voulez donner au repository`
5. Initialize this repository with a README: `Ne PAS cocher`
6. Add .gitignore: `None`
7. Add a license: `None`
8. Cliquer sur `Create repository`

###### b. Ajouter notre projet au repository Github
> **IMPORTANT** : Vérifiez que sous la ligne `Quick setup — if you’ve done this kind of thing before`, le bouton `HTTPS` soit bien cliqué.

1. Copiez la ligne `https://github.com/.../notaresto.git` qui apparaît dans le champ input de `Quick setup — if you’ve done this kind of thing before` (le bloc qui a un fond bleu).
2. Ouvrez un terminal situé dans votre projet et saisissez les lignes suivantes :

```
git init
git remote add origin https://github.com/..../notaresto.git
```

> Si vous avez fait une erreur dans l'URL lorsque vous avez tapé la commande (il aurait du s'agit de celle que vous avez copiée au point 1), vous pouvez la modifier en saisissant :
> 
> `git remote set-url origin https://github.com/..../notaresto.git`

###### c. Faire un commit pour initialiser le projet
```
git add -A
git commit -m "Init repository"
git push -u origin master
```

###### d. Faire des commits/push pendant le projet
```
git add -A
git commit -m "Nom du commit"
git push
```


##### RÉCUPÉRER LE PROJET
Si vous souhaitez ouvrir le projet par exemple sur un autre ordinateur :
1. Allez sur la page Github du projet à copier
2. Cliquez sur `Clone or download`
3. Vérifiez qu'il soit écrit `Clone  with HTTPS` (et non `Clone with SSH`, si ce n'est pas bon, cliquez sur `Use HTTPS`)
4. Copiez l'URL qui est dans le champ input
5. Ouvrez un terminal dans le dossier dans lequel le projet se situera (ATTENTION ! Le dossier qui ACCUEILLERA le projet ! C'est à dire par exemple `c:/users/tomsihap/projects`, pas besoin de créer à la main le sous dossier du futur projet !!)
6. Saisissez la ligne suivante :
```
git clone https://github.com/..../notaresto.git
```
7. Le dossier `notaresto` devrait maintenant être cloné ! Vous pouvez faire des commit/push dedans comme avant.

> **Note** : Attention, si vous clonez un projet de quelqu'un d'autre et que vous n'avez pas de droits en écriture, les push ne seront pas possibles. Dans le cas où vous voulez copier un projet existant et pouvoir faire vos propres commits dessus comme s'il s'agissait d'un nouveau projet, faites plutôt un fork : cela crééra le projet dans votre propre  Github.

#### AVEC Github Desktop
##### CRÉER LE PROJET ET FAIRE DES COMMIT/PUSH
1. Dans Github Desktop, cliquez sur `Add an Existing Repository from your Hard Drive...`
2. Cherchez le dossier du projet `notaresto`
3. Si le message `This directory does not appear to be a Git repository. Would you like to create a repositorry here instead?` apparaît, cliquez sur `create a repository` :
   - Name: `notaresto`
   - Description : `Description de votre projet (par ex: TP Symfony lors de ma formation DWWM chez Human Booster)`
   - Local Path : `Ne pas toucher, normalement il s'agit du chemin vers le dossier de projet`
   - Initialize this repository with a README: `Ne pas cocher`
   - Git Ignore: `None`
   - License: `None`
4. Cliquer sur `Create Repository`
5. Cliquer sur `Publish repository`
   - Name et Description: idem que en haut
   - Keep this code private: `À cocher uniquement si vous voulez le laisser en privé.`
   - Organization: `None`
   - Cliquer sur `Publish repository`
6. Pour faire des commits: après avoir fait des modifications dans le projet, remplissez le champ `Summary` puis cliquez sur `Commit to master`. Enfin, cliquez sur `Push` pour bien pusher les modifications.

##### RÉCUPÉRER LE PROJET
Si vous souhaitez ouvrir le projet par exemple sur un autre ordinateur :
1. Cliquez sur `Clone a Repository`
2. Cherchez le repository `pseudo/notaresto` (par exemple: `tomsihap/notaresto`)
3. Dans Local Path : remplissez le chemin vers lequel le projet sera cloné
4. Le projet est maintenant cloné ! Vous pouvez faire des commit/push comme avant.

> **Note** : Attention, si vous clonez un projet de quelqu'un d'autre et que vous n'avez pas de droits en écriture, les push ne seront pas possibles. Dans le cas où vous voulez copier un projet existant et pouvoir faire vos propres commits dessus comme s'il s'agissait d'un nouveau projet, faites plutôt un fork : cela crééra le projet dans votre propre  Github.

## Exercice 5 - Configurez le projet Symfony
1. Copiez-collez le fichier `.env` existant, pour créer le fichier `.env.local`
    > En ligne de commande c'est plus rapide : `cp .env .env.local`

2. Modifiez **uniquement** le fichier `.env.local` !
3. Adaptez la ligne `DATABASE_URL` selon votre configuration. La base de données n'a pas besoin d'exister encore pour être renseignée ici ! Par exemple :
   > `DATABASE_URL=mysql://root:root@127.0.0.1:8889/notaresto?serverVersion=5.7`
   >
    > `DATABASE_URL=mysql://root:@127.0.0.1:3306/notaresto?serverVersion=5.7`

À quoi sert le `.env.local` ? En fait, le `.env` est commité par défaut, tandis que `.env.local` est dans le `.gitignore` par défaut de Symfony. Deux avantages à l'utiliser :
1. C'est une énorme faute de sécurité que de  mettre des mots de passe dans un fichier qui se retrouve commité !
2. Si vous travaillez sur votre projet depuis plusieurs endroits (au travail, chez vous, version en serveur de prod, de préprod, de dev...), chaque version pourra avoir sa propre configuration `.env.local` sans qu'il n'y ait de conflits.

Mais à quoi sert alors d'avoir un `.env` ? Imaginez que vous rajoutiez des lignes de configuration dans votre `.env.local` (nom du site, clé d'API de Google Maps...). Si vous le laissez dans `.env.local`, ces clés n'apparaîtront pas dans Github. Si vous les ajoutez dans le `.env` avec des valeus par défaut (par exemple: `GOOGLE_API_KEY=**remplir_la_clé_d_api**)`, vous aurez un exemple de fichier `.env` à remplir dans un `.env.local` pour déployer votre projet.

> **Note en cas de CLONE du projet** : Si vous avez cloné le projet, n'oubliez pas de faire un `composer install` ! En effet, le dossier `vendor` n'est pas commité, il faut installer les dépendances après avoir cloné le projet.

## Exercice 6 - Créer les modèles

> Commits de correction : (Entités)
> - https://github.com/tomsihap/notaresto/commit/a354595066db9ddf820d729bf054a1355afa6bae
> - https://github.com/tomsihap/notaresto/commit/d4396566bfb243210c635e31787d737a73e315f9
> - https://github.com/tomsihap/notaresto/commit/46b6ee9bedc8ede61d307ddb61b7455cf5a0e4ee
> - https://github.com/tomsihap/notaresto/commit/b4076228388ae0004d2bbce9816d57894bb6f633
> - https://github.com/tomsihap/notaresto/commit/2905f4184edbd8aafad9d4d42e6b4cb7074b46c7

> Commits de correction : (Relations)
> - https://github.com/tomsihap/notaresto/commit/e7d73e087bbc3fb5fb7856f36da4ab43694d8c73
> - https://github.com/tomsihap/notaresto/commit/2a2a594ed30302f409845bba41845eeae16bbcdc
> - https://github.com/tomsihap/notaresto/commit/6e8e19fb55d6578ffbcc4174cf4bc45f7ca2beb8
> -  https://github.com/tomsihap/notaresto/commit/a07e4a4554e4347c98d52890ba45d3199c55df12

### Création des Model
Si vous suivez le MLD de la correction, les modèles à créer sont :
- User
- Restaurant
- City
- RestaurantPicture
- Review

> **IMPORTANT** : N'OUBLIEZ PAS de faire un commit après CHAQUE `make:entity` !!!! De cette façon, si vous faites une erreur à l'entité suivante, vous pouvez supprimer les fichiers créés de deux façons :
> 1. Console :
```
git checkout -- .
git clean -i
# Répondre "1" à la question
```
> 2. Github Desktop : clic droit sur `2 changed files` et `Discard changes`.

#### 1. Restaurant: `bin/console make:entity Restaurant`

Property name | Field type | Field length | Nullable ? |
---------|----------|---------|---------|
`name` | `string` | `255` | `no` |
`description` | `text` | | `yes` |
`createdAt` | `datetime` | | `no` |

#### 2. City: `bin/console make:entity City`

Property name | Field type | Field length | Nullable ? |
---------|----------|---------|---------|
`name` | `string` | `255` | `no` |
`zipcode` | `string` | `15` | `no` |

#### 3. RestaurantPicture: `bin/console make:entity RestaurantPicture`

Property name | Field type | Field length | Nullable ? |
---------|----------|---------|---------|

> On ne remplit rien pour le moment ! On créée l'entité vide. On la remplira lorsqu'on gèrera l'upload d'images.

#### 4. Review: `bin/console make:entity Review`

Property name | Field type | Field length | Nullable ? |
---------|----------|---------|---------|
`message` | `text` | | `yes` |
`rating` | `integer` | | `no` |
`createdAt` | `datetime` | | `no` |

### Création des relations
Les relations à créer seront :

> ATTENTION ! Prenez garde à la relation Review avec elle même (commentaire "parent")

Entité à modifier| Nouveau champ | Relation | Classe | Nullable ? | Accessors ? | Nouveau champ | Orphan Removal ?
---------|----------|---------|---------|---------|---------|---------|---------
Restaurant | `city` | `ManyToOne` | City | no | yes | `restaurants` | yes
RestaurantPicture | `restaurant` | `ManyToOne` | Restaurant | no | yes | `restaurantPictures` | yes
Review | `restaurant` | `ManyToOne` | Restaurant | no | yes | `reviews` | yes
Review | `parent` | `ManyToOne` | Review | yes | yes | `childs` |

#### Description des questions d'une relation
- `New property name (press <return> to stop adding fields):`
  - C'est le nouvel attribut que l'on ajoute à notre classe `Restaurant`. Ici : on ajoute un attribut `city` (**EN CAMEL CASE !!!! C'EST UN ATTRIBUT !**)

- `Field type (enter ? to see all types) [string]:`
  - Quel est le type de champ. On peut dire `relation` pour que l'interface nous propose les relations possibles, ou directement la relation voulue (`ManyToOne`, `OneToMany`...)

- `What class should this entity be related to?:`
  - C'est une relation : on veut rattacher notre entité à une autre entité, c'est à dire à une autre classe. On saisit le nom de la classe ici : `City` (**EN PASCAL CASE !!!! C'EST UNE CLASSE !**)

- `What type of relationship is this? Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:`
  - Comme on a indiqué `relation` à la question du FieldType tout à l'heure, l'interface nous propose une liste de relations possibles. Un restaurant n'a qu'une ville mais une ville a plusieurs restaurants : ce sera `ManyToOne`. Bien sûr, si nous avions modifié City au lieu de Restaurant, la relation aurait été inverse: `OneToMany`.

- `Is the Restaurant.city property allowed to be null (nullable)? (yes/no) [yes]:`
  - Peut-on rendre nullable le champ `city` ? Non, on répond `no`.

- `Do you want to add a new property to City so that you can access/update Restaurant objects from it - e.g. $city->getRestaurants()? (yes/no) [yes]:`
  - Comme ajoute un champ `city` à Restaurant, Symfony nous propose d'ajouter automatiquement un accesseur (un getter) dans l'entité City pour avoir tous les restaurants d'une ville ! Gardez la valeur par défaut, `yes`. 

- `New field name inside City [restaurants]:`
  - Comme un a un nouveau champ dans City (les restaurants), Symfony nous propose de l'ajouter. Gardez la valeur par défaut (déjà au pluriel !), `restaurants`.

- `Do you want to automatically delete orphaned App\Entity\Restaurant objects (orphanRemoval)? (yes/no) [no]:`
  - Le Orphan Removal n'existe que quand le champ n'est pas nullable: c'est la suppression des éléments orphelins en base de données, c'est à dire quand l'élément de la table parente n'existe plus. Par exemple, si je supprime une ville qui a des restaurants. Dans ce cas, dois-je supprimer les restaurants de la base de données ? Répondons ici `yes`.


#### Exemple

```bash
$ bin/console make:entity Restaurant

Your entity already exists! So lets add some new fields!

New property name (press <return> to stop adding fields):
> city

Field type (enter ? to see all types) [string]:
> relation

What class should this entity be related to?:
> City

What type of relationship is this?
------------ ----------------------------------------------------------------------
 Type         Description
------------ ----------------------------------------------------------------------
 ManyToOne    Each Restaurant relates to (has) one City.
              Each City can relate to (can have) many Restaurant objects

 OneToMany    Each Restaurant can relate to (can have) many City objects.
              Each City relates to (has) one Restaurant

 ManyToMany   Each Restaurant can relate to (can have) many City objects.
              Each City can also relate to (can also have) many Restaurant objects

 OneToOne     Each Restaurant relates to (has) exactly one City.
              Each City also relates to (has) exactly one Restaurant.
------------ ----------------------------------------------------------------------

Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
> ManyToOne

Is the Restaurant.city property allowed to be null (nullable)? (yes/no) [yes]:
> no

Do you want to add a new property to City so that you can access/update Restaurant objects from it - e.g. $city->getRestaurants()? (yes/no) [yes]:
> yes

A new property will also be added to the City class so that you can access the related Restaurant objects from it.

New field name inside City [restaurants]:
>

Do you want to activate orphanRemoval on your relationship?
A Restaurant is "orphaned" when it is removed from its related City.
e.g. $city->removeRestaurant($restaurant)

NOTE: If a Restaurant may *change* from one City to another, answer "no".

Do you want to automatically delete orphaned App\Entity\Restaurant objects (orphanRemoval)? (yes/no) [no]:
> yes

updated: src/Entity/Restaurant.php
updated: src/Entity/City.php

Add another property? Enter the property name (or press <return> to stop adding fields):
>

Success!

Next: When you're ready, create a migration with make:migration
```

### Gérer les champs CreatedAt
Comme nous avons des champs CreatedAt, il faut leur fournir une valeur  par défaut : c'est à dire que quand je créée un objet de type `Restaurant` par exemple, je dois ajouter une valeur par défaut à `createdAt`.

Pour cela, dans `Restaurant.php` et `Review.php`, ajoutez dans la méthode `__construct()` la ligne suivante : 

```php
    $this->setCreatedAt(new \DateTime());
```

Vos fichiers doivent donc ressembler à ça :

`Review.php`:
```php
public function __construct()
{
    $this->setCreatedAt(new \DateTime());
    $this->childs = new ArrayCollection();
}
```

`Restaurant.php`:
```php
public function __construct()
{
    $this->setCreatedAt(new \DateTime());
    $this->restaurantPictures = new ArrayCollection();
    $this->reviews = new ArrayCollection();
}
```

## Exercice 7 - Faire les migrations

> **Attention** : La base de données définie dans .env.local ne doit pas être encore crée (faite à la main par exemple) !

```bash
# Création de la base de données
php bin/console doctrine:database:create

# Création des premières migrations
php bin/console make:migration

# Exécution des premières migrations
php bin/console doctrine:migrations:migrate

# Par la suite, lorsque vous ferez d'autres migrations :
# 1. On teste si des migrations existent en essayant de les exécuter
# 2. On créée les nouvelles migrations
# 3. On relance l'exécution de migrations
php bin/console doctrine:migrations:migrate
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

## Exercice 8 - Créer les controllers et les routes
> Commits de correction:
> - https://github.com/tomsihap/notaresto/commit/5d6ba5d591772f9f6d07cff37d23efaa35be9c17
> - https://github.com/tomsihap/notaresto/commit/5a91d58f43a21f24bdd06bbdd81eaae318fe8bd6
> - https://github.com/tomsihap/notaresto/commit/dcdaf405e56ae9edeef2611a73a658102f454ffb
> - https://github.com/tomsihap/notaresto/commit/bab7403c9e2516f01c26ee1ddfe64e70e4b9da01


La liste de routes à utiliser est celle de l'exercice 3. Créons les controllers :

```
bin/console make:controller RestaurantController
bin/console make:controller RestaurantPictureController
bin/console make:controller CityController
bin/console make:controller ReviewController
```

> **Note** : ces commandes crééent des vues par défaut dans `templates`. Vous n'aurez peut être pas besoin de toutes, n'oubliez pas de supprimer les dossiers à l'avenir si vous ne vous en servirez pas pour ne pas avoir de fichiers inutiles !

> **Astuce** : Pensez à taper dans la console `bin/console debug:router` quand vous créez des routes pour vérifier si Symfony les a bien pris en compte ! Si elles n'aparaissent pas, c'est qu'elles sont mal placées dans la liste ou mal déclarées ou que deux routes ont le même nom. S'il y a une erreur dans la console, c'est une faute de frappe sans doute dans l'annotation.

### Exemple: RestaurantController
```php
<?php

namespace App\Controller;

use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{
    /**
     * Affiche la liste des restaurants
     * @Route("/restaurants", name="restaurant_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('restaurant/index.html.twig', [
            'controller_name' => 'RestaurantController',
        ]);
    }

    /**
     * Affiche un restaurant
     * @Route("/restaurant/{restaurant}", name="restaurant_show", methods={"GET"}, requirements={"restaurant"="\d+"})
     * @param Restaurant $restaurant
     */
    public function show(Restaurant $restaurant)
    {
    }

    /**
     * Affiche le formulaire de création de restaurant
     * @Route("/restaurant/new", name="restaurant_new", methods={"GET"})
     */
    public function new()
    {
    }

    /**
     * Traite la requête d'un formulaire de création de restaurant
     * @Route("/restaurant", name="restaurant_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'un restaurant (GET)
     * Traite le formulaire d'édition d'un restaurant (POST)
     * @Route("/restaurant/{restaurant}/edit", name="restaurant_edit", methods={"GET", "POST"})
     * @param Restaurant $restaurant
     */
    public function edit(Restaurant $restaurant)
    {
    }

    /**
     * Supprime un restaurant
     * @Route("/restaurant/{restaurant}", name="restaurant_delete", methods={"DELETE"})
     * @param Restaurant $restaurant
     */
    public function delete(Restaurant $restaurant)
    {
    }
}
```

## Exercice 9 - Faire la page d'accueil

Les fixtures sont des fichiers qui vont générer des fausses données pour votre base de données.

Il faut tout d'abord installer les fixtures dans le projet:

```
composer require orm-fixtures --dev 
```

Ensuite, créez les fichiers de fixtures pour chaque entité : nous  n'allons pas forcément toutes les utiliser mais elles seront prêtes ! Par convention, les fichiers de fixtures sont nommés ainsi : `NomDeLaClasseFixtures`. Par exemple: `RestaurantFixtures`.

```
php bin/console make:fixture RestaurantFixtures
php bin/console make:fixture RestaurantPictureFixtures
php bin/console make:fixture ReviewFixtures
php bin/console make:fixture CityFixtures
```

### Gestion des dépendances entre fixtures

> Documentation : https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html#loading-the-fixture-files-in-order

Pour créer un Restaurant, nous avons besoin que des City existent. Pour créer des Review, nous avons besoin qu'un Restaurant existe. Pour créer des RestaurantPicture, nous avont besoin qu'un restaurant existe.

Par défaut, Symfony va exécuter les fixtures dans l'ordre alphabétique : nous allons lui dire qu'il y a des dépendances entre elles (c'est à dire qu'il doit en exécuter certaines avant d'autres) - en effet, si les City ne sont pas créées, les restaurants ne pourront pas être créés !

Voici l'ordre d'exécution des fixtures :

Priorité | Fixture |
---------|----------|
 1 | CityFixtures |
 2 | RestaurantFixtures |
 3 | RestaurantPictureFixtures |
 3 | ReviewFixtures |

Nous allons indiquer tout  d'abord à `RestaurantPictureFixtures` et à `ReviewFixtures` que `RestaurantFixtures` doit être créé avant eux.

Pour cela, on dit à la fixture d'implémenter l'interface `DependantFixtureInterface`, qui l'obligera à avoir la méthode `getDependancies()`. Modifiez les ainsi:


`RestaurantPictureFixtures.php` :

```php
<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RestaurantPictureFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            RestaurantFixtures::class,
        );
    }
}
```

`ReviewFixtures.php` :

```php
<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ReviewFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            RestaurantFixtures::class,
        );
    }
}
```

Enfin, disons à RestaurantFixtures qu'il a besoin de CityFixtures pour fonctionner :

`RestaurantFixtures.php` :

```php
<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RestaurantFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            CityFixtures::class,
        );
    }
}

```

### Créer des fixtures !

Ça y est ! Créons nos fixtures dans l'ordre: d'abord des City, puis des Restaurant, puis des Review.

`CityFixtures.php` :

```php
class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 1000; $i++) {
            $city = new City();
            $city->setName("Lyon");
            $city->setZipcode("69001");

            $manager->persist($city);

        }

        $manager->flush();
    }
}
```

Cool, 1000 villes seront créées ! Le souci... C'est qu'elles s'apelleront toutes "Lyon" et auront pour code postal "69001".

Pour pallier à ce souci, nous allons installer Faker (https://github.com/fzaninotto/Faker) qui nous permettra d'avoir des chaînes de caractères aléatoires et cohérentes :

```
composer require fzaninotto/faker
```

Modifiez maintenant `CityFixtures`. Attention à bien importer la classe `Factory` (Faker/Factory) :

```php
<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 1000; $i++) {
            $city = new City();
            $city->setName( $faker->city );
            $city->setZipcode( $faker->postcode );
            
            $manager->persist($city);
        }

        $manager->flush();
    }
}
```

On exécute les fixtures :

```
bin/console doctrine:fixtures:load
```

Validez `yes` lors de la question : le CLI vous indique que la base de  données va être vidée puis re-remplie par les fixtures.

Une fois la commande exécutée, vérifiez dans PHPMyAdmin : ça y est, 1000 villes aux noms réalistes ont été créées !

Maintenant que nos villes existent (de l'ID 1 à 1000), modifions maintenant `RestaurantFixtures` et `ReviewFixtures`. Petite différence : pour les clés étrangères, nous importerons le Repository correspondant. Par exemple, pour le `$restaurrant->setCity()` nous avons besoin d'un objet City en base de données, nous utilisons donc le `CityRepository` auquel on lui donnera un ID aléatoire entre 1 et 1000 (car il y a 1000 villes).

`RestaurantFixtures.php` :

```php
<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use App\Repository\CityRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class RestaurantFixtures extends Fixture implements DependentFixtureInterface
{
    private $cityRepository;

    public  function __construct(CityRepository $cityRepository) {
        $this->cityRepository = $cityRepository;
    }
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for($i=0; $i < 1000; $i++) {

            $restaurant = new Restaurant();
            $restaurant->setName( $faker->company );
            $restaurant->setDescription( $faker->text(500) );
            $restaurant->setCity( $this->cityRepository->find( rand(1, 1000) ) );

            $manager->persist($restaurant);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            CityFixtures::class,
        );
    }
}

```

On termine sur `ReviewFixtures` avant de rééxécuter toutes nos fixtures. Allez, on va en faire 10 000 ! On va faire  deux boucles : 7000 reviews d'utilisateurs, et 3000 reviews qui seront des réponses à d'autres reviews.

```php
<?php

namespace App\DataFixtures;

use App\Entity\Review;
use App\Repository\RestaurantRepository;
use App\Repository\ReviewRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class ReviewFixtures extends Fixture implements DependentFixtureInterface
{
    private $restaurantRepository;
    private $reviewRepository;

    public function __construct(RestaurantRepository $restaurantRepository, ReviewRepository $reviewRepository) {
        $this->restaurantRepository = $restaurantRepository;
        $this->reviewRepository = $reviewRepository;
    }

    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        /**
         * On créée 7000 reviews initiales
         */
        for ($i=0; $i<7000; $i++) {
            $review = new Review();
            $review->setMessage( $faker->text(800) );
            $review->setRating( rand(0,5) );
            $review->setRestaurant( $this->restaurantRepository->find(rand(1, 1000)) );
            $manager->persist($review);
        }

        /**
         * On les enregistre en DB
         */
        $manager->flush();


        /**
         * On créée 3000 reviews enfants (dont le parent est une des review initiales)
         */
        for ($i=0; $i<3000; $i++) {
            $review = new Review();
            $review->setMessage( $faker->text(800) );
            $review->setRating( rand(0,5) );
            $review->setParent( $this->reviewRepository->find(rand(1, 7000)) ); // On cherche un ID entre 1 et 7000 (un commentaire initial)
            $review->setRestaurant( $review->getParent()->getRestaurant() ); // On récupère le restaurant de la review parente
            $manager->persist($review);

        }

        // $manager->persist($product);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            RestaurantFixtures::class,
        );
    }
}
```

Ouf ! Exécutons enfin toutes ces fixtures. Pour cela, nous avons besoin de vider la base de données et de la re-remplir afin d'avoir des données propres. Voici les commandes à exécuter à la suite à chaque fois que vous chargerez des fixtures dorénavant :

```bash
# Suppression du schéma de bdd pour Doctrine
bin/console doc:schema:drop --force

# Création du schéma de bdd pour Doctrine
bin/console doc:schema:create

# Création des fixtures (validation automatique avec --no-interaction)
bin/console doc:fixtures:load --no-interaction
```

### Afficher les restaurants en page d'accueil

Nous n'avons pas de page d'accueil ! Créons la tout de suite dans un AppController par exemple :

```
bin/console make:controller AppController
```

Modifiez le `AppController.php` créé pour créer une route de  page d'accueil, qui appelera un Twig à qui on enverra la liste des objets Restaurant :

```php
<?php

namespace App\Controller;

use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('app/index.html.twig', [
            'restaurants' => $this->getDoctrine()->getRepository(Restaurant::class)->findAll(),
        ]);
    }
}
```

Modifiez le Twig correspondant `app/index.html.twig` :

```html
{% extends 'base.html.twig' %}

{% block title %}Liste des restaurants{% endblock %}

{% block body %}

    <ul>
        {% for restaurant in restaurants %}
            <li>
                {{ restaurant.name }}<br>
                <small>{{ restaurant.description }}</small>
            </li>
        {% endfor %}

    </ul>


{% endblock %}

```

Bien sûr, à vous d'adapter tout ce code avec du CSS ou Bootstrap !

### Afficher les 10 derniers restaurants créés

Comme on a vu plus haut, pour afficher tous les élements, la méthode `findAll()` du repository existe déjà et fait le job pour nous. Dès que nous avons des requêtes un peu plus complexes (ici : trier par `created_at` descendant puis prendre les 10 premiers résultats), on va devoir ajouter une méthode au `RestaurantRepository` qui fera ce travail.

Pour commencer, trouvons la requête en MySQL :

```sql
SELECT * FROM `restaurant` ORDER BY `created_at` DESC LIMIT 0, 10
```

Ensuite, ajoutons une méthode dans `RestaurantRepository.php`. Dans ce fichier, on trouve en commentaires 2 méthodes d'exemple sur lesquelles s'inspirer pour créer notre méthode !

Observez bien les requêtes en commentaires et voyez comme il est facile de composer sa requête comme ça. Il s'agit du QueryBuilder de Doctrine.

```php
<?php

namespace App\Repository;

use App\Entity\Restaurant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Restaurant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Restaurant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Restaurant[]    findAll()
 * @method Restaurant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestaurantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restaurant::class);
    }

    public function findLastTenElements() {
        return $this->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Restaurant[] Returns an array of Restaurant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Restaurant
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
```

Modifiez votre `AppController.php` de sorte à ne plus utiliser `findAll()` mais bien `findLastTenElements()` que nous venons de créer  :

```php
<?php

namespace App\Controller;

use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('app/index.html.twig', [
            'restaurants' => $this->getDoctrine()->getRepository(Restaurant::class)->findLastTenElements(),
        ]);
    }
}
```

Et voilà comment utiliser une requête SQL personnalisée dans Symfony !

### Afficher la valeur moyenne de la note d'un restaurant

On souhaiterait, dans twig, accéder à quelque chose comme ça :
```
{{ restaurant.averageRating }}
```

En fait, dans Twig, quand on fait `{{ restaurant.name }}`,  `{{ restaurant.description }}`, ce qu'il se passe, c'est que Twig va chercher respectivement `$restaurant->getName()` et `$restaurant->getDescription()`.

Donc si je souhaite avoir quelque chose comme `{{ restaurant.averageRating }}` qui me retourne la note moyenne, je dois créer... `$restaurant->getAverageRating()` dans `Restaurant.php` !

Modifions `Restaurant.php` et ajoutons la méthode suivante qui  calcule la  moyenne des reviews d'un restaurant (accessibles grâce à `$this->getReviews()` dans la classe elle-même) :

```php
public function getAverageRating() : float
{

    $sum = 0;
    $total = 0;

    foreach($this->getReviews() as $review) {
        $sum += $review->getRating();
        $total++;
    }

    return $sum/$total;
}
```

Cette fonction ne fait que calculer la moyenne des reviews du restaurant. Et c'est tout ! On n'a plus qu'à modifier un peu notre Twig pour appeler cette  méthode :

```html
{% extends 'base.html.twig' %}

{% block title %}Liste des restaurants{% endblock %}

{% block body %}

    <ul>
        {% for restaurant in restaurants %}
            <li>
                {{ restaurant.name }} (Moyenne de {{ restaurant.averageRating | number_format(2, ',') }})<br>
                <small>{{ restaurant.description }}</small>
            </li>
        {% endfor %}

    </ul>

{% endblock %}
```

Enfin fini ! C'était un très gros chapitre. Prenez le temps de bien tout  avoir compris et maîtrisé avant de poursuivre !

## Exercice 10 - Améliorer la requête et ne retourner que les 10 meilleurs

### Requête SQL pour afficher les 10 meilleurs restaurants
La requête que nous voulons est en fait les 10 meilleures notes de restaurants, groupées par restaurants pour en faire la moyenne. Testez dans PHPMyAdmin vos requêtes.

Commençons donc par la table `Review` :

```sql
SELECT * FROM review
```

Joignons les restaurants :

```sql
SELECT *
FROM review
INNER JOIN restaurant
    ON review.restaurant_id = restaurant.id
```

Nous avons donc maintenant toutes les reviews avec le restaurant rattaché. Ce que nous voulons, c'est plutôt de grouper ces données par restaurant (donc une ligne par restaurant). Et de toutes ces données groupées, nous voulons la moyenne de la note (`review.rating`):

```sql
SELECT AVG(review.rating) as average, restaurant.id as restaurantId
FROM review
INNER JOIN restaurant
    ON review.restaurant_id = restaurant.id
GROUP BY restaurant_id
```

Et voilà ! Listons par ordre décroissant :

```sql
SELECT AVG(review.rating) as average, restaurant.id as restaurantId
FROM review
INNER JOIN restaurant
    ON review.restaurant_id = restaurant.id
GROUP BY restaurant_id
ORDER BY moyenne DESC
```

Et ne gardons que les 10 meilleurs (les 10 premiers donc) :
```sql
SELECT AVG(review.rating) as averarge, restaurant.id as restaurantId
FROM review
INNER JOIN restaurant
    ON review.restaurant_id = restaurant.id
GROUP BY restaurant_id
ORDER BY moyenne DESC
LIMIT 0, 10
```

### Traduire dans le QueryBuilder

Le QueryBuilder de Doctrine nous permet de construire des requêtes à la façon de Doctrine, directement dans le Repository.

Ici, on part de la table `Review`, on va donc travailler dans le `ReviewRepository`. Encore une fois, inspirez vous des requêtes déjà préparées en commentaires dans le Repository :
```php
public function findByExampleField($value)
{
    return $this->createQueryBuilder('r')
        ->andWhere('r.exampleField = :val')
        ->setParameter('val', $value)
        ->orderBy('r.id', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
    ;
}
```

On comprend par exemple que pour ajouter un `WHERE`, on utilise `andWhere`. Un `ORDER BY`, on utilise `orderBy('champ', 'direction')`.

Pour le reste, cherchez dans la documentation comment traduire les éléments manquants.

Les éléments de notre requête sont :
```sql
SELECT AVG(review.rating) as average, restaurant.id as restaurantId
FROM review
INNER JOIN restaurant
    ON review.restaurant_id = restaurant.id
GROUP BY restaurant_id
ORDER BY moyenne DESC
LIMIT 0, 10
```

Voici la liste des éléments nécessaires avec leurs documentations :

- SELECT d'une moyenne (AVG) https://stackoverflow.com/questions/20023426/symfony-doctrine-sum-and-avg-score-of-players/30553309
- INNER JOIN de Restaurant https://www.doctrine-project.org/projects/doctrine-dbal/en/2.10/reference/query-builder.html#join-clauses
- GROUP BY par Restaurant https://www.doctrine-project.org/projects/doctrine-dbal/en/2.10/reference/query-builder.html#group-by-and-having-clause
- ORDER BY sur la moyenne dans le sens descendant https://www.doctrine-project.org/projects/doctrine-dbal/en/2.10/reference/query-builder.html#order-by-clause
- LIMIT des 10 premiers résultats https://www.doctrine-project.org/projects/doctrine-dbal/en/2.10/reference/query-builder.html#limit-clause

En compilant toutes ces informations, on réussit à construire la requête suivante dans `ReviewRepository.php` :

```php
public function findBestTenRatings() {

    return $this->createQueryBuilder('r')
        ->select('AVG(r.rating) as average', 'restaurant.id as restaurantId')
        ->innerJoin('r.restaurant', 'restaurant')
        ->groupBy('restaurant')
        ->orderBy('AVG(r.rating)', 'DESC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
        ;
}
```

Si on teste ça, dans `AppController.php`, ajoutons un `dd()` avant le `return` pour tester notre nouvelle méthode. Attention, la méthode vient bien de `ReviewRepository` !

```php
/**
 * @Route("/", name="app_index", methods={"GET"})
 */
public function index()
{

    dd(
        $this->getDoctrine()->getRepository(Review::class)->findBestTenRatings()
    );
    
    
    return $this->render('app/index.html.twig', [
        'restaurants' => $this->getDoctrine()->getRepository(Restaurant::class)->findLastTenElements(),
    ]);
}
```

En allant sur la page d'accueil, ça marche... presque ! En fait, il y a un petit problème : là où `$this->getDoctrine()->getRepository(Restaurant::class)->findLastTenElements()` nous retournait un array d'objets `Restaurant`, cette fois notre méthode nous retourne un array d'arrays pas très pratique à utiliser.

En effet : Doctrine ne peut pas savoir qu'il doit nous retourner des restaurants avec en plus le champ "average", il nous retourne donc juste ce qu'on lui a demandé, c'est à dire les champs du `SELECT` de la requête.

Ce que nous allons faire maintenant, c'est donc de faire une boucle sur ce résultat pour récupérer les objets `Restaurant` correspondant. Un petit détail d'optimisation cependant dans notre méthode. Elle nous retourne la  note moyenne. Mais nous allons créer  des objets Restaurant qui eux, ont déjà accès à leur  propre note moyenne. Retirons donc ce champ du `select`, nous n'avons besoin que des ID de restaurants ! Dans `ReviewRepository.php` :

```php
public function findBestTenRatings() {

    return $this->createQueryBuilder('r')
        ->select('restaurant.id as restaurantId')
        ->innerJoin('r.restaurant', 'restaurant')
        ->groupBy('restaurant')
        ->orderBy('AVG(r.rating)', 'DESC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
        ;
}
```


Maintenant dans `AppController.php`, faisons une boucle sur les données de `findBestTenRatings` pour créer des objects `Restaurant` :

```php
/**
 * @Route("/", name="app_index", methods={"GET"})
 */
public function index()
{

    /**
     * On récupère les données de notre nouvelle méthode
     */
    $tenBestRestaurantsId = $this->getDoctrine()->getRepository(Review::class)->findBestTenRatings();

    $tenBestRestaurants = array_map(function($data) {
        return $this->getDoctrine()->getRepository(Restaurant::class)->find($data['restaurantId']);
    }, $tenBestRestaurantsId);

    /**
     * On prépare le futur array d'objets Restaurant
     */
    $tenBestRestaurants = [];

    /**
     * On boucle sur le tableau de données retourné par le ReviewRepository
     */
    foreach($tenBestRestaurantsId as $data) {
        // Pour chaque élément on prend le `restaurantId` et on cherche l'objet Restaurant grace au RestaurantRepository :
        $tenBestRestaurants[] = $this->getDoctrine()->getRepository(Restaurant::class)->find($data['restaurantId']);
    }

    return $this->render('app/index.html.twig', [
        // Cette fois, on envoie à Twig notre nouveau tableau
        'restaurants' => $tenBestRestaurants,
    ]);
}
```

Et voilà ! Une autre manière d'écrire le foreach qui est plus élégante, c'est `array_map`. C'est une fonction qui prend en paramètres une fonction anonyme et un array. La fonction anonyme est en fait ce qu'on va faire pour transformer le tableau passé en 2ème paramètres.
```php
$tenBestRestaurants = array_map(function($data) {
    return $this->getDoctrine()->getRepository(Restaurant::class)->find($data['restaurantId']);
}, $tenBestRestaurantsId);
```


## Exercice 11 : Authentification !

### Créer l'entité User
```
bin/console make:user User
Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
> yes

Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
> email

Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).

Does this app need to hash/check user passwords? (yes/no) [yes]:
> yes
```

#### Explications des lignes

> Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]
> - Est-ce que vous souhaitez enregistrer les utilisateurs en base de données avec Doctrine ? Oui bien sûr ! `yes`

> Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
> - Quelle sera la propriété de votre entité User qui serviva de login ? On choisit `email`

> Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).
> Does this app need to hash/check user passwords? (yes/no) [yes]:
> - Est-ce que notre application a besoin de hasher les mots de passe (c'est à dire les chiffrer) ? Évidemment oui ! `yes`

### Créer un formulaire de création d'utilisateurs
```
bin/console make:registration-form

Creating a registration form for App\Entity\User

Do you want to add a @UniqueEntity validation annotation on your User class to make sure duplicate accounts aren't created? (yes/no) [yes]:
> 

Do you want to automatically authenticate the user after registration? (yes/no) [yes]:
> 
```

#### Explication des lignes
> Do you want to add a @UniqueEntity validation annotation on your User class to make sure duplicate accounts aren't created? (yes/no) [yes]:
> - Est-ce que l'on souhaite que nos utilisateurs soient uniques sur le champ de login, leur e-mail donc ? Oui ! `yes`

> Do you want to automatically authenticate the user after registration? (yes/no) [yes]:
> - Est-ce que l'on veut que nos utilisateurs soient logués automatiquement après la création du compte ? Oui ! `yes`

### Migration
Maintenant que l'entité est créée, faites une migration pour créer la table en base de données :

```bash
bin/console doctrine:migrations:migrate
bin/console make:migration
bin/console doctrine:migrations:migrate
```

### Styliser le formulaire en Boostrap

1. Ajoutez Bootstrap à votre `base.html.twig` :

```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{% block title %}Notaresto, l'appli de notation de restos!{% endblock %}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
```

2. Ajoutez Bootstrap aux formulaires générés par Symfony en modifiant `config/packages/twig.yaml` :

```yaml
twig:
    default_path: '%kernel.project_dir%/templates'
    debug: '%kernel.debug%'
    strict_variables: '%kernel.debug%'
    exception_controller: null
    form_themes: ['bootstrap_4_layout.html.twig']
```

3. Créez un compte ! Allez sur `/register` pour tester ça.


### Corriger l'erreur
Une fois le formulaire rempli, vous devriez avoir l'erreur suivante :

```
Unable to generate a URL for the named route "" as such route does not exist.
```

Avec quelques informations de contexte qui ressemblent à peu près à ça :

```php
// AbstractController->redirectToRoute('') in src/Controller/RegistrationController.php (line 39)

    $entityManager->persist($user);
    $entityManager->flush();
    // do anything else you need here, like send an email
    
    return $this->redirectToRoute('');
}
```

C'est en fait vraiment très clair : nous devons modifier `RegistrationController.php` (un des fichiers créés par `make:registration-form`) et lui indiquer, à la ligne qui nous est donnée, où nous devons rediriger l'utilisateur après qu'il se soit créé un compte. Idéalement vers une page compte utilisateur par exemple, mais comme nous n'en avons pas, redirigeons-le vers la page d'accueil. Dans la correction, le nom de la route (dans `AppController` pour rappel) est `app_index`.

Dans `RegistrationController.php` en ligne 39 :

```php
return $this->redirectToRoute('app_index');
```

Et voilà ! Vous avez vu comment créer un compte utilisateur et rediriger ce nouvel utilisateur vers la page d'accueil. Prenez le temps d'étudier tous les nouveaux fichiers qui ont été créés par `make:registration-form`. La création de User est plutôt complexe car beaucoup de choses entrent en compte (des sessions, le hashage des mots de passe...). Beaucoup de choses sont à apprendre des fichiers créés par Symfony.

Pour tester : retournez sur  `/register` et créez un nouveau compte (avec un e-mail différent puisque le précédent a quand même été créé).

### Gérer le login d'utilisateurs

Maintenant que nos utilisateurs peuvent créer un compte, il va falloir les loguer :

```bash
bin/console make:auth
What style of authentication do you want? [Empty authenticator]:
[0] Empty authenticator
[1] Login form authenticator
> 1

The class name of the authenticator to create (e.g. AppCustomAuthenticator):
> LoginFormAuthenticator

Choose a name for the controller class (e.g. SecurityController) [SecurityController]:
> 

Do you want to generate a '/logout' URL? (yes/no) [yes]:
> 
```

#### Explication des lignes
> What style of authentication do you want? [Empty authenticator]:
> - Symfony nous demande si il faut gérer l'authentification par un formulaire (c'est ce que nous voulons) ou par autre chose (login avec Google, Facebook, via une API...). Ici, on remplit : `1`

> The class name of the authenticator to create (e.g. AppCustomAuthenticator):
> - Symfony va créer un service qui va gérer les méthodes d'authentification. Apellons-le : `LoginFormAuthenticator`

> Choose a name for the controller class (e.g. SecurityController) [SecurityController]:
> - Symfony va créer un controller qui va gérer les routes d'authentification (/login par exemple). Apellons-le avec le nom par défaut: `SecurityController`

> Do you want to generate a '/logout' URL? (yes/no) [yes]:
> - Est-ce que l'on veut une route /logout créée automatiquement ? Oui ! `yes`


Corrigeons maintenant l'erreur qui a été générée. Comme pour `/register`, l'erreur est explicite et n'est pas méchante ! On n'a pas indiqué de page vers laquelle rediriger un utilisateur qui vient d'être logué.

Dans `LoginFormAuthenticator.php`, remplacez en lignes 97-98 :

```php
// For example : return new RedirectResponse($this->urlGenerator->generate('some_route'));
throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
```

par ce qui est indiqué en commentaire, avec une route valide... la page d'accueil par exemple :

```php
return new RedirectResponse($this->urlGenerator->generate('app_index'));
```

Et voilà ! Actualisez. Pour vérifier si vous êtes connectés, vérifiez dans la barre de débug de Symfony : l'email de l'utilisateur devrait apparaître. Essayez de vous déloguer en allant sur `/logout` : ça devrait remplacer l'adresse e-mail par "anon." (comme anonyme) !

## Exercice 12 : Faire une navbar qui indique l'adresse e-mail de l'utilisateur

Nous partons du principe que Bootstrap est installé dans le projet.

### Mettre une navbar
- Créez un fichier `src/templates/_partials/navbar.html.twig`
- Trouvez une navbar Boostrap et collez-la dedans et adaptez-la. Par exemple, une navbar avec tous les éléments utiles sans logique encore :

```html
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ path('app_index') }}">NotaResto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>


    <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Bienvenue, example@example.com !</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Déconnexion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Se connecter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Créer un compte</a>
        </li>
    </ul>
    </div>

</nav>
```

- Ensuite, importez la navbar dans `base.html.twig` grâce à `include` à l'endroit souhaité. Ici par exemple, juste après `<body>` :

```twig
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{% block title %}Notaresto, l'appli de notation de restos !{% endblock %}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>

        {% include '_partials/navbar.html.twig' %}
        {% block body %}{% endblock %}

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
```

### Affichage conditionnel

Affichons maintenant de façon conditionnelle nos liens et remplissons les `href` avec des liens réels grâce à `path` :

```twig
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ path('app_index') }}">NotaResto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>


    <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav ml-auto">

        {% if app.user %}
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_index') }}" tabindex="-1" aria-disabled="true">Bienvenue, example@example.com !</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_logout') }}" tabindex="-1" aria-disabled="true">Déconnexion</a>
            </li>
        {% else %}
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_login') }}" tabindex="-1" aria-disabled="true">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_register') }}" tabindex="-1" aria-disabled="true">Créer un compte</a>
            </li>
        {% endif %}


    </ul>
    </div>

</nav>
```

## Exercice 13 : Enfin du front !
Pour le moment, on part du principe que notre utilisateur a tous les rôles possibles donc toutes les pages devraient être visibles.


### Barre de navigation avec liens non fonctionnels

```twig
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ path('app_index') }}">NotaResto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Restaurants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Voir mes restaurants</a>
                    <a class="dropdown-item" href="#">Voir tous les restaurants</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Créer un restaurant</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Utilisateurs
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Voir tous les utilisateurs</a>
                </div>
            </li>
        </ul>
    </div>


    <div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav ml-auto">

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Code postal..." aria-label="Search">
            <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Search</button>
        </form>
        {% if app.user %}
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_index') }}" tabindex="-1" aria-disabled="true">Bienvenue, example@example.com !</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_logout') }}" tabindex="-1" aria-disabled="true">Déconnexion</a>
            </li>
        {% else %}
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_login') }}" tabindex="-1" aria-disabled="true">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ path('app_register') }}" tabindex="-1" aria-disabled="true">Créer un compte</a>
            </li>
        {% endif %}


    </ul>
    </div>

</nav>
```

### Modification de la page d'accueil

Ajoutons un peu de CSS : créez le fichier suivant `public/dist/css/styles.css` :

```css
.jumbotron {
    padding-top: 3rem;
    padding-bottom: 3rem;
    margin-bottom: 0;
    background-color: #fff;
}
@media (min-width: 768px) {
    .jumbotron {
        padding-top: 6rem;
        padding-bottom: 6rem;
    }
}

.jumbotron p:last-child {
    margin-bottom: 0;
}

.jumbotron h1 {
    font-weight: 300;
}

.jumbotron .container {
    max-width: 40rem;
}

footer {
    padding-top: 3rem;
    padding-bottom: 3rem;
}

footer p {
    margin-bottom: .25rem;
}

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
```

Et importez-le dans `base.html.twig` :

```twig
<head>
    <meta charset="UTF-8">
    <title>{% block title %}Notaresto, l'appli de notation de restos !{% endblock %}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dist/css/styles.css') }}" />
    {% block stylesheets %}{% endblock %}
</head>
```

Modifions maintenant la page d'accueil `src/templates/app/index.html.twig` pour afficher plus joliment nos restaurants et mettre un faux lien sur chaque restaurant :

```twig
{% extends 'base.html.twig' %}

{% block body %}
        <section class="jumbotron text-center">
            {% for restaurant in restaurants %}
                {% if loop.first %}
                    <div class="container">
                        <h1>Notre meilleur restaurant est...</h1>
                        <h2>{{ restaurant.name }} ! <small class="badge badge-primary">{{ restaurant.averageRating | number_format(2, ',') }} sur 5 étoiles !</small></h2>
                        <p class="lead text-muted">
                            {{ restaurant.description }}
                        </p>
                        <p>
                            <a href="#" class="btn btn-success my-2">Donner un avis !</a>
                        </p>
                    </div>
                {% endif %}
            {% endfor %}
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    {% for restaurant in restaurants %}
                        {% if not loop.first %}
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <h2>{{restaurant.name}}</h2>
                                                <small class="badge badge-primary">{{ restaurant.averageRating | number_format(2, ',') }} sur 5 étoiles !</small>
                                                {{ restaurant.description }}
                                        </p>

                                        <div class="d-flex justify-content-between float-right">
                                            <a href="#" class="btn btn-sm btn-outline-secondary">Donner un avis</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>

{% endblock %}
```

### Créations des routes et pages:
Avec les changements de la page d'accueil, plusieurs pages sont à créer :

- "Voir mes restaurants" : `GET /restaurants`
- "Voir tous les restaurants" : `GET /restaurants`
- "Créer un restaurant" : `GET /restaurant/new` et `POST /restaurant`
- "Donner un avis (voir un restaurant)" : `GET /restaurants/{restaurant}` et `POST /review`
- "Voir tous les utilisateurs" : `GET /users`
- "Rechercher un code postal" : `GET /search?zipcode=123456`


#### Routes
En triant tout ça :

Route | Contrôleur | Méthode
---------|----------|----------|
GET /restaurants | RestaurantController | `index()`
GET /restaurant/new | RestaurantController | `new()`
POST /restaurant | RestaurantController | `create(Request $request)`
GET /restaurants/{restaurant} | RestaurantController | `show(Restaurant $restaurant)`
POST /review | ReviewController | `create(Request $request)`
GET /users | UserController | `index()`
GET /search?zipcode=123456 | AppController | `search(Request $request)`

Même si nous n'avons rien mis dans les méthodes, la plupart des routes existent ! Il nous manque seulement les deux dernières routes.

Créez `UserController`: 

```bash
bin/console make:controller UserController
```

Et ça tombe bien, la méthode `index()` existe déjà dans `UserController`! Changez juste l'annotation pour la rendre plus précise :

```php
/**
 * @Route("/user", name="user_index", methods={"GET"})
 */
```

Ajoutez aussi à `AppController` notre méthode qui correspond au moteur de recherche (attention, on importe bien (`Symfony\Component\HttpFoundation\Request`) :

```php
/**
* @Route("/search", name="app_search", methods={"GET"})
* @param Request $request
*/
public function search(Request $request) {

}
```

#### Liens

Maintenant que les routes sont créées, modifions nos navbar et page d'accueil pour créer des liens. Nous utilisons la fonction Twig `path('nom_de_route')`.


##### `navbar.html.twig` : Remplacez les liens dans la navbar.

```twig
<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Restaurants
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ path('restaurant_index') }}">Voir mes restaurants</a>
            <a class="dropdown-item" href="{{ path('restaurant_index') }}">Voir tous les restaurants</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ path('restaurant_new') }}">Créer un restaurant</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Utilisateurs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ path('user_index') }}">Voir tous les utilisateurs</a>
        </div>
    </li>
</ul>
```

##### `app/index.html.twig` Remplacez les 2 occurrences de liens "Donner un avis" par le lien vers le restaurant.

```twig
<a href="{{ path('restaurant_show', {restaurant: restaurant.id} ) }}" class="btn btn-success my-2">Donner un avis !</a>
```

Si tout se passe bien, aucun bug ne doit apparaître, c'est que Twig a réussi à générer nos liens !

#### Pages

1. Liste des utilisateurs
2. Liste des restaurants
3. Recherche d'un restaurant
4. Création d'un restaurant
5. Affichage d'un restaurant


### 1. Liste des utilisateurs

> Il s'agit du lien "Tous les utilisateurs"

Dans `UserController.php` :

```php
public function index()
{

    $users = $this->getDoctrine()->getRepository(User::class)->findAll();

    return $this->render('user/index.html.twig', [
        'users' => $users
    ]);
}
```

Dans `templates/users/index.html.twig` (on utilise `if not loop.last` pour dire "si ce n'est pas le dernier de la boucle, alors met une virgule", pour séparer par une virgule les rôles) :

```twig
{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}
    <div class="container mt-3">
        <div class="row">
            <div class="col">

                <table class="table">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>E-mail</th>
                        <th>Rôle</th>
                    </tr>
                    </thead>

                    <tbody>

                    {% for user in users %}
                        <tr>
                            <td>{{ user.id }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                {% for role in user.roles %}
                                    {{ role }}
                                    {% if not loop.last %},{% endif %}
                                {% endfor %}
                            </td>
                        </tr>
                    {% endfor %}

                    </tbody>

                </table>

            </div>
        </div>
    </div>
{% endblock %}
```

### 2. Liste des restaurants


> Il s'agit du lien "Tous les restaurants" et "Mes restaurants"

Dans `RestaurantController.php` :

```php
public function index()
{

    $restaurants = $this->getDoctrine()->getRepository(Restaurant::class)->findAll();

    return $this->render('restaurant/index.html.twig', [
        'restaurants' => $restaurants,
    ]);
}
```

Dans `templates/restaurants/index.html.twig` :

```twig
{% extends 'base.html.twig' %}

{% block title %}Liste des restaurants{% endblock %}

{% block body %}
    <div class="container mt-3">
        <div class="row">
            <div class="col">

                <table class="table">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Le restaurant</th>
                        <th>Localité</th>
                        <th>Note</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>

                    {% for restaurant in restaurants %}
                        <tr>
                            <td>{{ restaurant.id }}</td>
                            <td>
                                {{ restaurant.name }}
                                <small>{{ restaurant.description }}</small>
                            </td>
                            <td>{{ restaurant.city.zipcode }} {{ restaurant.city.name }}</td>
                            <td>{{ restaurant.averageRating | number_format(2, ',') }}</td>
                            <td>
                                <a href="{{ path("restaurant_show", {restaurant: restaurant.id}) }}">Voir</a>
                            </td>
                        </tr>
                    {% endfor %}

                    </tbody>

                </table>

            </div>
        </div>
    </div>
{% endblock %}
```

Oups, un bug apparaît probablement lorsque l'on clique sur `Voir les restaurants`! En effet, certains restaurants n'ont pas de note, ils ne peuvent donc pas avoir de note moyenne, sinon  on aurait une division par zéro (total/nombreNotes).

Modifions rapidement `Restaurant.php` pour corriger ce bug :

```php
public function getAverageRating() : float
{

    $sum = 0;
    $total = 0;

    foreach($this->getReviews() as $review) {
        $sum += $review->getRating();
        $total++;
    }

    if ($total > 0) {
        return $sum/$total;
    }

    return 0;

}
```

#### Pagination !

Comme on a plusieurs centaines de restaurants, le mieux est d'afficher ce tableau avec une pagination. Vous pouvez suivre ce tutoriel pour la mettre en place :https://nouvelle-techno.fr/actualites/2019/08/11/symfony-4-creer-un-blog-pas-a-pas-mettre-en-place-la-pagination

### 4. Création d'un restaurant

Préparons la route de création d'un restaurant dans `RestaurantController.php` :

```php
/**
* Affiche le formulaire de création de restaurant
* @Route("/restaurant/new", name="restaurant_new", methods={"GET"})
*/
public function new()
{
    return $this->render('restaurants/form.html.twig');
}
```

Et créons un formulaire rapidement dans `templates/restaurants/form.html.twig` pour voir à quoi il pourrait ressembler :

```twig
{% extends 'base.html.twig' %}

{% block title %}Liste des restaurants{% endblock %}

{% block body %}
    <div class="container mt-3">
        <div class="row">
            <div class="col">

                <form action="">
                    <div class="form-group">
                        <label for="">Nom du restaurant</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Ville</label>
                        <select class="form-control" name="" id="">
                            <option value="">69001 - Ville 1</option>
                            <option value="">69002 - Ville 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Description du restaurant</label>
                        <textarea class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Description du restaurant</label>
                        <input type="file" class="form-control">
                    </div>

                    <button class="btn btn-success">Créer un restaurant</button>
                </form>

            </div>
        </div>
    </div>
{% endblock %}
```

Et voilà, normalement le lien `Créer un restaurant` devrait afficher le formulaire.

### 5. Affichage d'un restaurant

Modifions le controller `RestaurantController.php`. Le restaurant est injecté en paramètres à  la méthode `show(Restaurant $restaurant)` via l'ID de l'URL, on a juste à l'envoyer à une vue `show.html.twig` :

```php
/**
 * Affiche un restaurant
 * @Route("/restaurant/{restaurant}", name="restaurant_show", methods={"GET"}, requirements={"restaurant"="\d+"})
 * @param Restaurant $restaurant
 * @return Response
 */
public function show(Restaurant $restaurant)
{
    return $this->render('restaurant/show.html.twig', [
        'restaurant' => $restaurant
    ]);
}
```

Créons la vue :

```twig
{% extends 'base.html.twig' %}

{% block title %}Liste des restaurants{% endblock %}

{% block body %}
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <h2>{{ restaurant.name }}</h2>
                <ul>
                    <li>
                        <strong>Localité:</strong> {{ restaurant.city.zipcode }} {{ restaurant.city.name }}
                    </li>
                    <li>
                        <strong>Note moyenne :</strong> {{ restaurant.averageRating | number_format(2, ',') }}
                    </li>
                </ul>
                <small>
                    {{ restaurant.description }}
                </small>
                <p>
                    <img src="https://picsum.photos/id/{{ random(1,1000) }}/800/600" alt="" width="30%" class="mb-1" data-toggle="modal" data-target="#exampleModal">
                    <img src="https://picsum.photos/id/{{ random(1,1000) }}/800/600" alt="" width="30%" class="mb-1" data-toggle="modal" data-target="#exampleModal">
                    <img src="https://picsum.photos/id/{{ random(1,1000) }}/800/600" alt="" width="30%" class="mb-1" data-toggle="modal" data-target="#exampleModal">
                    <img src="https://picsum.photos/id/{{ random(1,1000) }}/800/600" alt="" width="30%" class="mb-1" data-toggle="modal" data-target="#exampleModal">
                    <img src="https://picsum.photos/id/{{ random(1,1000) }}/800/600" alt="" width="30%" class="mb-1" data-toggle="modal" data-target="#exampleModal">
                </p>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Titre de la photo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://picsum.photos/id/{{ random(1,1000) }}/800/600" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8">

                <h2>Les avis sur ce restaurant</h2>
                <hr>

                <div class="card mb-2">
                    <div class="card-header">
                        Rédigez un avis sur ce restaurant !
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Note</label>
                                <input type="number" min="0" max="5" class="form-control">
                            </div>
                            <button class="btn-sm btn-primary float-right">Envoyer</button>

                        </form>
                    </div>
                </div>

                {% for review in restaurant.reviews %}
                    <div class="card mb-2">
                        <div class="card-header">
                            Rédigé par John Doe ({{ review.rating }}/5)
                        </div>
                        <div class="card-body">
                            {{ review.message }}
                        </div>
                        <div class="card-footer">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <input type="text" class="form-control" placeholder="Répondre à cet avis...">
                                </div>
                                <button class="btn btn-sm btn-primary float-right">Répondre</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
```

Et voilà, les boutons "Créer un avis" devraient afficher le restaurant et ses avis !

## Exercice 14 : Gérer les nouvelles relations

Avant de rendre fonctionnels nos formulaires et la gestion de rôles, nous allons mettre à jour nos entités pour prendre en compte nos nouvelles relations possibles : 

```bash
User ManyToOne City         # Un user a une ville
User OneToMany Review       # Un user a plusieurs reviews
User OneToMany Restaurant   # Un user a plusieurs restaurants
```

Faites la commande :
```bash
bin/console make:entity User
```

Et remplissez les relations suivantes (les questions sont dans un ordre différent selon qu'on soit en OneToMany ou ManyToOne) :

- ManyToOne

Entité à modifier| Nouveau champ | Relation | Classe | Nullable ? | Accessors ? | Nouveau champ
---------|----------|---------|---------|---------|---------|---------
User | `city` | `ManyToOne` | City | yes | yes | `users`

- OneToMany

Entité à modifier| Nouveau champ | Relation | Classe | Nouveau champ | Nullable ? | OrphanRemoval ?
---------|----------|---------|---------|---------|---------|---------|---------
User | `reviews` | `OneToMany` | Review | `user` | no | yes
User | `restaurants` | `OneToMany` | Restaurant | `user` | no | yes

### Fixtures

Comme nous avons de nouvelles relations, nos fixtures ne  vont plus marcher (en effet un restaurant et une review doivent avoir un User).

Créons UserFixtures (`bin/console make:fixtures UserFixtures`) et modifions-le. Nous allons en profiter pour commencer à découvrir les rôles et attribuer des rôles à nos 3 nouveaux utilisateurs :

```php
<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Repository\CityRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    private $encoder;
    private $cityRepository;

    public function __construct(UserPasswordEncoderInterface $encoder, CityRepository $cityRepository)
    {
        $this->encoder = $encoder;
        $this->cityRepository = $cityRepository;
    }

    public function load(ObjectManager $manager)
    {

        $randomCity = $this->cityRepository->find(rand(1, 1000));

        $userAdmin = new User();
        $userAdmin->setEmail('moderateur@notaresto.com');
        $userAdmin->setPassword($this->encoder->encodePassword($userAdmin, 'notaresto'));
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $userAdmin->setCity($randomCity);
        $manager->persist($userAdmin);

        $userClient = new User();
        $userClient->setEmail('client@notaresto.com');
        $userClient->setPassword($this->encoder->encodePassword($userAdmin, 'notaresto'));
        $userClient->setRoles(['ROLE_CLIENT']);
        $userClient->setCity($randomCity);
        $manager->persist($userClient);

        $userRestaurateur = new User();
        $userRestaurateur->setEmail('restaurateur@notaresto.com');
        $userRestaurateur->setPassword($this->encoder->encodePassword($userAdmin, 'notaresto'));
        $userRestaurateur->setRoles(['ROLE_RESTO']);
        $userRestaurateur->setCity($randomCity);
        $manager->persist($userRestaurateur);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            CityFixtures::class,
        );
    }
}
```


> - Dans cette fixture, on a injecté par le constructeur un `UserPasswordEncoder` : c'est un service qui nous permet de chiffrer les mots de passe avant de les entrer en base de données ! Obligatoire car sinon, le login ne marcherait pas (rappel: lors du login, ce sont des mots de passe chiffrés qui sont comparés).
> - Nous importons aussi le CityRepository et nous  attribuons la même ville aléatoire aux 3 utilisateurs pour faciliter les tests.
> - Comme nous avons besoin de CityFixtures pour créer un user (lui attribuer une ville), nous l'ajoutons dans `getDependancies()`.

Modifions aussi `RestaurantFixtures.php` :

```php
<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use App\Repository\CityRepository;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class RestaurantFixtures extends Fixture implements DependentFixtureInterface
{
    private $cityRepository;
    private $userRepository;

    public  function __construct(CityRepository $cityRepository, UserRepository) {
        $this->cityRepository = $cityRepository;
        $this->userRepository = $userRepository;
    }
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for($i=0; $i < 1000; $i++) {

            $restaurant = new Restaurant();
            $restaurant->setName( $faker->company );
            $restaurant->setDescription( $faker->text(500) );
            $restaurant->setCity( $this->cityRepository->find( rand(1, 1000) ) );
            $restaurant->setUser( $this->userRepository->findOneBy(["email" => "restaurateur@notaresto.com"]) );

            $manager->persist($restaurant);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class
        );
    }
}
```

> - Nous importons le UserRepository dans le constructeur pour pouvoir ajouter un User au restaurant
> - Nous ajoutons justement le `setUser` et on trouve le user "restaurateur"
> - Nous ajoutons aussi dans `getDependancies` les fixtures `UserFixutres` pour qu'elles soient lancées avant `RestaurantFixtures`
> - On peut retirer `CityFixtures` des dépendances car elles seront de toute  façon lancées avant `UserFixtures` (c'est une dépendance de UserFixtures)


On fait de même pour `ReviewFixtures.php` :

```php
<?php

namespace App\DataFixtures;

use App\Entity\Review;
use App\Repository\RestaurantRepository;
use App\Repository\ReviewRepository;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class ReviewFixtures extends Fixture implements DependentFixtureInterface
{
    private $restaurantRepository;
    private $reviewRepository;
    private $userRepository;

    public function __construct(RestaurantRepository $restaurantRepository,
                                ReviewRepository $reviewRepository,
                                UserRepository $userRepository) {

        $this->restaurantRepository = $restaurantRepository;
        $this->reviewRepository = $reviewRepository;
        $this->userRepository = $userRepository;
    }

    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        /**
         * On créée 7000 reviews initiales
         */
        for ($i=0; $i<7000; $i++) {
            $review = new Review();
            $review->setMessage( $faker->text(800) );
            $review->setRating( rand(0,5) );
            $review->setRestaurant( $this->restaurantRepository->find(rand(1, 1000)) );
            $review->setUser( $this->userRepository->findOneBy(["email" => "client@notaresto.com"]) );
            $manager->persist($review);
        }

        /**
         * On les enregistre en DB
         */
        $manager->flush();


        /**
         * On créée 3000 reviews enfants (dont le parent est une des review initiales)
         */
        for ($i=0; $i<3000; $i++) {
            $review = new Review();
            $review->setMessage( $faker->text(800) );
            $review->setParent( $this->reviewRepository->find(rand(1, 7000)) ); // On cherche un ID entre 1 et 7000 (un commentaire initial)
            $review->setRestaurant( $review->getParent()->getRestaurant() ); // On récupère le restaurant de la review parente
            $review->setUser( $this->userRepository->findOneBy(["email" => "restaurateur@notaresto.com"]) );
            $manager->persist($review);

        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            RestaurantFixtures::class,
        );
    }
}
```

> - on importe le UserRepository
> - on ajoute les deux `setUser()` : client pour les premiers, restaurateur pour les réponses
> - on supprime `setRating()` dans la réponse : pas besoin de mettre une note pour répondre !
> - on laisse RestaurantFixtures dans les dépendances (lui meme étant dépendant de User, qui est dépendant de City, on est sûr que tout sera déjà chargé)

Comme nous venons de retirer `setRating()` dans la fixture car nous voulons parfois ne pas mettre de notes à un avis, modifions l'entité en fonction. Dans `Review.php`, rendez nullable `$rating` :

```php
/**
 * @ORM\Column(type="integer", nullable=true)
 */
private $rating;
```


### Migrations

Comme nous faisons une grosse  modification structurelle de la base de données (ajout de clés étrangères), nous pouvons par tranquilité d'esprit supprimer la base de données et la re-créer. C'est aussi à ça que servent les fixtures : s'assurer que nos données de base soient facilement là même si on supprime la base de données !


#### Rappel:  Nettoyer un projet et tout relancer proprement
```bash
# Avant tout: SUPPRIMEZ TOUS LES FICHIERS DANS src/Migrations !
bin/console doctrine:database:drop --force # On supprime la bdd
bin/console doctrine:database:create # On créée la bdd
bin/console make:migration # On créée les migrations
bin/console doctrine:migrations:migrate # On migre
bin/console doctrine:fixtures:load --no-interaction # On execute les fixtures
```

En une ligne (Linux, OSX, GitBash) : `bin/console doctrine:database:drop --force && bin/console doctrine:database:create && bin/console make:migration && bin/console doctrine:migrations:migrate && bin/console doctrine:fixtures:load --no-interaction`

#### Rappel: Faire une migration en cours de projet sans tout supprimer

```bash
bin/console doctrine:migrations:migrate
bin/console make:migration
bin/console doctrine:migrations:migrate
```

En une ligne (Linux, OSX, GitBash) : `bin/console doctrine:migrations:migrate && bin/console make:migration && bin/console doctrine:migrations:migrate`

#### Rappel: Faire une fixture en cours de projet sans tout supprimer
```bash
bin/console doctrine:schema:drop --force
bin/console doctrine:schema:create
bin/console doctrine:fixtures:load --no-interaction
```

En une ligne (Linux, OSX, GitBash) : `bin/console doctrine:schema:drop --force && bin/console doctrine:schema:create && bin/console doctrine:fixtures:load --no-interaction`

## Exercice 15 : Créez le formulaire de création de restaurant

Nous allons utiliser le système de formulaires de Symfony pour créer notre formulaire de Restaurants :

```bash
╭─tomsihap@MacBook-Pro-de-Thomas ~/projects/notaresto ‹master› 
╰─$ bin/console make:form

 The name of the form class (e.g. FiercePuppyType):
 > RestaurantType

 The name of Entity or fully qualified model class name that the new form will be bound to (empty for none):
 > Restaurant
```

Modifions ce formulaire pour l'adapter à nos besoins (nous ne voulons que les champs name, description et city). Dans `RestaurantType.php` :

```php
public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('name')
        ->add('description')
        ->add('city', EntityType::class, [
            'class' => City::class,
            'choice_label' => 'name'
        ])
    ;
}
```

Importons ce formulaire dans la méthode `RestaurantController::new()`, celle qui affiche le formulaire. Dans `RestaurantController.php` :

```php
/**
* Affiche le formulaire de création de restaurant
* @Route("/restaurant/new", name="restaurant_new", methods={"GET"})
*/
public function new()
{
    $restaurant = new Restaurant();
    $form = $this->createForm(RestaurantType::class, $restaurant);

    // On veut que le user du restaurant soit le user connecté (on l'a grâce à $this->getUser())
    $restaurant->setUser($this->getUser());

    return $this->render('restaurant/form.html.twig', [
        'form' => $form->createView()
    ]);
}
```

Modifions notre fichier `restaurant/form.html.twig` en supprimant notre formulaire fait à la main et en important celui généré par Symfony :

```twig
{% extends 'base.html.twig' %}

{% block title %}Liste des restaurants{% endblock %}

{% block body %}
    <div class="container mt-3">
        <div class="row">
            <div class="col">

                {{ form_start(form) }}
                {{ form_widget(form) }}
                    <button class="btn btn-success">Créer un restaurant</button>
                {{ form_end(form) }}

            </div>
        </div>
    </div>
{% endblock %}
```

Et voilà, notre formulaire fonctionne et toutes nos villes sont affichées !

> **Optionnel** : Idéalement, il faudrait utiliser du JavaScript pour le styliser avec de l'autocomplétion par exemple. La librairie Select2 fait ça très bien : https://select2.org/getting-started/basic-usage, quelques modifications sont à faire :

> Dans `RestaurantType.php` :

```php
->add('city', EntityType::class, [
    'class' => City::class,
    'choice_label' => 'name',
    'attr' => [
        'class' => 'restaurant-form-city'
    ]
])
```

> Dans `restaurant/form.html.twig`, à la fin du fichier :

```twig
{% block javascripts %}
    <script>
        $(document).ready(function() {
            $('.restaurant-form-city').select2();
        });
    </script>
{% endblock %}
```

> Dans `base.html.twig` :
```twig
<link rel="stylesheet" href="{{ asset('dist/css/styles.css') }}" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
```

### Traitement du formulaire
D'après la documentation de Symfony (https://symfony.com/doc/current/forms.html#processing-forms), il est recommandé d'utiliser la même méthode pour afficher le formulaire et pour le traiter. En effet, par défaut, le formulaire va s'envoyer vers la même méthode que pour l'affichage (ici, `RestaurantController::new()`).

Adaptons notre controller par rapport aux conseils de la documentation :

```php
/**
 * Affiche et gère le formulaire de création de restaurant
 * @Route("/restaurant/new", name="restaurant_new", methods={"GET", "POST"})
*/
public function new(Request $request)
{
    $restaurant = new Restaurant();

    $form = $this->createForm(RestaurantType::class, $restaurant);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $restaurant = $form->getData();
        $restaurant->setUser($this->getUser());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($restaurant);
        $entityManager->flush();

        return $this->redirectToRoute('restaurant_index');
    }

    return $this->render('restaurant/form.html.twig', [
        'form' => $form->createView()
    ]);
}
```

> **ATTENTION** : Pour tester, il faut d'abord être logué ! Passez dans `/login` et loguez vous avec un user Restaurateur, sinon la ligne `$this->getUser()` ne marchera pas.

## Exercice 16 : Ajout d'images dans le formulaire de Restaurant

D'après la documentation (https://symfony.com/doc/current/controller/upload_file.html), deux manières de faire sont possibles: faire un système d'upload à la main avec un service dédié comme expliqué dans la doc, soit utiliser un bundle (ou une dépendance, une librairie)très connu, [VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle/).

Nous suivrons le tutoriel de Symfony.


1. Ajoutez un champ "filename" à `RestaurantPicture` (string, 255, non nullable) : 

```bash
bin/console make:entity RestaurantPicture

 New property name (press <return> to stop adding fields):
 > filename

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > yes
```

N'oubliez pas de faire une migration pour enregistrer ce champ en base de données :

```bash
bin/console doctrine:migrations:migrate
bin/console make:migration
bin/console doctrine:migrations:migrate
```

2. Créez un form pour `RestaurantPicture` :

```bash
bin/console make:form                    

 The name of the form class (e.g. GrumpyJellybeanType):
 > RestaurantPictureType

 The name of Entity or fully qualified model class name that the new form will be bound to (empty for none):
 > RestaurantPicture
```

3. Modifiez ce nouveau fichier `RestaurantPictureType.php` (attention aux nombreux `use`) :

```php
<?php

namespace App\Form;

use App\Entity\RestaurantPicture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class RestaurantPictureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('filename', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/gif',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Vous devez uploader un format d\'image valide.',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RestaurantPicture::class,
        ]);
    }
}
```

4. Ajoutons ce formulaire sur la page d'affichage d'un restaurant :

Dans `RestaurantController.php` :
```php
/**
 * Affiche un restaurant
 * @Route("/restaurant/{restaurant}", name="restaurant_show", methods={"GET", "POST"},  requirements={"restaurant"="\d+"})
 * @param Request $request
 * @param Restaurant $restaurant
 * @return Response
*/
public function show(Request $request, Restaurant $restaurant)
{

    $picture = new RestaurantPicture();
    $form = $this->createForm(RestaurantPictureType::class, $picture);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $picture = $form->getData();
        $picture->setRestaurant($restaurant);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($picture);
        $entityManager->flush();

        return $this->redirectToRoute('restaurant_show', ['restaurant' => $restaurant->getId()]);
    }

    return $this->render('restaurant/show.html.twig', [
        'restaurant' => $restaurant,
        'formPicture' => $form->createView()
    ]);
}
```

Dans `restaurant/show.html.twig` à l'endroit souhaité pour le formulaire :

```twig
<h3>Ajouter une image</h3>
{{ form_start(formPicture) }}
{{ form_widget(formPicture) }}
<button class="btn btn-sm btn-primary">Envoyer</button>
{{ form_end(formPicture) }}
```

### Traitement du formulaire

Maintenant que le formulaire est créé et s'affiche dans la page d'un restaurant, traitons les données d'upload.

> En résumant les instructions du tutoriel, nous allons créer une classe Service (c'est une classe qui contient de la logique qui aurait pu se trouver dans un controller mais que l'on met ailleurs, dans un service donc, pour pouvoir l'utiliser de partout. Ici, notre service, c'est un uploader de fichier : on en aura en effet potentiellement besoin de partout !)

> Nous allons aussi modifier des fichiers de configuration pour indiquer à notre service où enregistrer nos fichiers.

1. Créez le futur dossier d'arrivée des images: `public/uploads/pictures`.
2. Modifiez `config/services.yaml` et ajoutez :

- La ligne `pictures_directory` sous `parameters` :

```yaml
parameters:
    pictures_directory: '%kernel.project_dir%/public/uploads/pictures'
```
- Le bloc suivant sous `services`, tout en bas du fichier. ATTENTION à l'indentation !!!

```yaml
services:
    ...
    App\Service\FileUploader:
        arguments:
            $targetDirectory: '%pictures_directory%'
```

3. Créez le fichier service `src/Service/FileUploader.php` :

```php
<?php

// src/Service/FileUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $file->move($this->getTargetDirectory(), $fileName);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}
```

4. Modifiez le controller pour qu'il utilise le service quand l'upload de l'image est effectué. Dans `RestaurantController.php` :

```php
public function show(Request $request, Restaurant $restaurant, FileUploader $fileUploader)
    {

        $picture = new RestaurantPicture();
        $form = $this->createForm(RestaurantPictureType::class, $picture);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form['filename']->getData();
            if ($file) {

                $filename = $fileUploader->upload($file);

                $picture->setFilename($filename);
                $picture->setRestaurant($restaurant);

            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($picture);
            $entityManager->flush();

            return $this->redirectToRoute('restaurant_show', ['restaurant' => $restaurant->getId()]);
        }

        return $this->render('restaurant/show.html.twig', [
            'restaurant' => $restaurant,
            'formPicture' => $form->createView()
        ]);
    }
```

Et voilà ! Vous pouvez tester. Normalement, une ligne devrait apparaître en base de données et un fichier devrait apparaître dans le dossier `public/uploads/pictures`.

### Afficher les images

Modifiez `restaurant/show.html.twig` pour récupérer les images. Dans notre exemple, on utilise un modal qui s'ouvre quand on clique sur une image, on a donc deux boucles (une pour afficher les images en petit, une pour générer les modals) :

```twig
{% extends 'base.html.twig' %}

{% block title %}Liste des restaurants{% endblock %}

{% block body %}
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <h2>{{ restaurant.name }}</h2>
                <ul>
                    <li>
                        <strong>Localité:</strong> {{ restaurant.city.zipcode }} {{ restaurant.city.name }}
                    </li>
                    <li>
                        <strong>Note moyenne :</strong> {{ restaurant.averageRating | number_format(2, ',') }}
                    </li>
                </ul>
                <small>
                    {{ restaurant.description }}
                </small>
                <p>
                    {% for picture in restaurant.restaurantPictures %}
                        <img src="{{ asset('uploads/pictures/' ~ picture.filename) }}" alt="" width="30%" class="mb-1" data-toggle="modal" data-target="#picture-{{ picture.id }}">
                    {% endfor %}
                </p>

                <hr>
                <h3>Ajouter une image</h3>
                {{ form_start(formPicture) }}
                {{ form_widget(formPicture) }}
                <button class="btn btn-sm btn-primary">Envoyer</button>
                {{ form_end(formPicture) }}
            </div>

            {% for picture in restaurant.restaurantPictures %}
                <!-- Modal -->
                <div class="modal fade" id="picture-{{ picture.id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog mw-100 w-75" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('uploads/pictures/' ~ picture.filename) }}" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}


            <div class="col-8">

                <h2>Les avis sur ce restaurant</h2>
                <hr>

                <div class="card mb-2">
                    <div class="card-header">
                        Rédigez un avis sur ce restaurant !
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Note</label>
                                <input type="number" min="0" max="5" class="form-control">
                            </div>
                            <button class="btn-sm btn-primary float-right">Envoyer</button>

                        </form>
                    </div>
                </div>

                {% for review in restaurant.reviews %}
                    <div class="card mb-2">
                        <div class="card-header">
                            Rédigé par John Doe ({{ review.rating }}/5)
                        </div>
                        <div class="card-body">
                            {{ review.message }}
                        </div>
                        <div class="card-footer">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <input type="text" class="form-control" placeholder="Répondre à cet avis...">
                                </div>
                                <button class="btn btn-sm btn-primary float-right">Répondre</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
```

> **Attention** : vous ne voulez pas mettre sur Git les images que vous uploadez en test ! N'oubliez pas de rajouter au fichier `.gitignore` à la racine du projet la ligne `/public/uploads`.

## Exercice 17 : Créez le formulaire de création de reviews
Le principe est le même :
1. Créer le formulaire Symfony `make:form`
2. L'appeler dans la route qui gèrera l'affichage et le traitement du formulaire
3. L'envoyer à Twig

### Création du formulaire
```bash
bin/console make:form

 The name of the form class (e.g. GentleKangarooType):
 > ReviewType

 The name of Entity or fully qualified model class name that the new form will be bound to (empty for none):
 > Review
```

Modifiez `ReviewType.php` pour n'avoir que les champs utiles :

```php
public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('message')
        ->add('rating')
    ;
}
```

### Import et traitement du formulaire dans le contrôleur

Nous n'allons pas dans ReviewController mais dans RestaurantController : en effet, notre formulaire de review s'affiche dans la page d'affichage d'un restaurant, c'est à dire `RestaurantController::show()` !

Voici la méthode `show()` complète :

```php
/**
     * Affiche un restaurant
     * @Route("/restaurant/{restaurant}", name="restaurant_show", methods={"GET", "POST"}, requirements={"restaurant"="\d+"})
     * @param Request $request
     * @param Restaurant $restaurant
     * @return Response
     */
    public function show(Request $request, Restaurant $restaurant, FileUploader $fileUploader)
    {

        /**
         * Gestion du formulaire Picture
         */
        $picture = new RestaurantPicture();
        $formPicture = $this->createForm(RestaurantPictureType::class, $picture);

        $formPicture->handleRequest($request);

        if ($formPicture->isSubmitted() && $formPicture->isValid()) {

            $file = $formPicture['filename']->getData();
            if ($file) {

                $filename = $fileUploader->upload($file);

                $picture->setFilename($filename);

                // Le restaurant de l'image est le restaurant qui est affiché sur la page
                $picture->setRestaurant($restaurant);

            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($picture);
            $entityManager->flush();

            // On redirige vers la page du restaurant une fois l'image postée
            return $this->redirectToRoute('restaurant_show', ['restaurant' => $restaurant->getId()]);
        }
        /**
         * // Fin de gestion du formulaire Picture
         */

        /**
         * Gestion du formulaire Review
         */

        $review = new Review();

        $formReview = $this->createForm(ReviewType::class, $review);
        $formReview->handleRequest($request);

        if ($formReview->isSubmitted() && $formReview->isValid()) {
            $review = $formReview->getData();

            // Le User de la review est le User connecté
            $review->setUser($this->getUser());

            // Le restaurant de la review est le Restaurant qu'on affiche
            $review->setRestaurant($restaurant);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($review);
            $entityManager->flush();

            // On redirige vers la page du restaurant une fois la review postée
            return $this->redirectToRoute('restaurant_show', ['restaurant' => $restaurant->getId()]);
        }

        /**
         * // Fin de gestion du formulaire Review
         */

        /**
         * Par défaut : on renvoie la vue restaurant/show.html.twig avec:
         * - le restaurant à afficher
         * - le formulaire d'images formPicture
         * - le formulaire de review formReview
         */
        return $this->render('restaurant/show.html.twig', [
            'restaurant' => $restaurant,
            'formPicture' => $formPicture->createView(),
            'formReview' => $formReview->createView()
        ]);
    }
```

### Affichage du formulaire

On n'a plus qu'à afficher le formulaire dans `restaurant/show.html.twig` à la place du formulaire de review qu'on avait écrit à la main :

```twig
<div class="card mb-2">
    <div class="card-header">
        Rédigez un avis sur ce restaurant !
    </div>
    <div class="card-body">
        {{ form_start(formReview) }}
        {{ form_widget(formReview) }}
        <button class="btn-sm btn-primary float-right">Envoyer</button>
        {{ form_end(formReview) }}
    </div>
</div>
```

Et voilà ! Créez une review, elle devrait s'afficher.

> **Note** : Pour faire des formulaires avancés, faire des validations de formulaires, limiter les champs (ici pour review, un INT de 0 à 5 par exemple), la documentation de Symfony est très bien faite : https://symfony.com/doc/current/forms.html

## Exercice 18 : Gestion des rôles (modérateur, restaurateur, client)
## Exercice 19 : Ajout d'une réponse par un restaurateur à une review
## Exercice 20 : Recherche de restaurants par code postal

Modifions l'input de `navbar.html.twig` pour en faire un formulaire digne de ce nom :

```twig
<form class="form-inline my-2 my-lg-0" method="get" action="{{ path('app_search') }}">
    <input name="zipcode" class="form-control form-control-sm mr-sm-2" type="search" placeholder="Code postal..." aria-label="Search">
    <button class="btn btn-outline-primary btn-sm my-2 my-sm-0" type="submit">Rechercher</button>
</form>
```

Et adaptons la méthode d'arrivée pour qu'elle retourne notre tableau de restaurants. Comme on a déjà un template de tableau de restaurants (`templates/restaurants/index.html.twig`), on va le réutiliser ! Dans `AppController.php` :

```php
/**
* @Route("/search", name="app_search", methods={"GET"})
* @param Request $request
*/
public function search(Request $request) {
    // On récupère l'input de recherche du formulaire, le name=zipcode
    $searchZipcode = $request->query->get('zipcode');

    // On recherche une ville par son code postal
    $city = $this->getDoctrine()->getRepository(City::class)->findOneBy(["zipcode" => $searchZipcode]);


    // Si une ville est trouvée
    if ($city) {

        $restaurants = $city->getRestaurants();

        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurants,
        ]);
    }

    // Sinon, on redirige en page d'accueil
    return $this->redirectToRoute("app_index");
}
```

Et voilà ! Testez le moteur de recherche avec un code postal existant qui possède un restaurant (prenez un code postal de restaurant de la liste  dans /restaurants par exemple).


## Exercice 22 : Ajouter les routes Edit et Delete pour Restaurant
## Exercice 23 : Ajouter les routes Edit et Delete pour Review
## Exercice 24 : Ajouter les routes Edit et Delete pour User