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
{{ messages.noteMoyenne 
average Rating }}
```

En fait, dans Twig, quand on fait `{{ 
    restaurant.name }}
    `,  `{{ 
        restaurant.description }}
        `, ce qu'il se passe, c'est que Twig va chercher 
        respectivement `$restaurant->getName()` et `$restaurant->getDescription()`.

Donc si je souhaite avoir quelque chose comme `{{ 
    
    restaurant.averageRating }}
     qui me retourne la note moyenne, je dois créer... `
     $restaurant->getAverageRating()
      dans `Restaurant.php` !

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

Commençons donc par la table ` Review examen :

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

Si on teste ça, dans `AppController.php`, ajoutons un `
dd()
` avant le `return` pour tester notre nouvelle méthode. Attention, la méthode vient bien de `ReviewRepository` !

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

En allant sur la page d'accueil, ça marche... presque ! En fait, il y a un petit problème : là où `$this->getDoctrine()->getRepository(Restaurant::class)->findLastTenElements()` nous retournait un array d'objets `Restaurant`, 
cette fois notre méthode nous retourne un array d'arrays pas très pratique à utiliser.

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

Et voilà ! Une autre manière d'écrire le 
foreach 
qui est plus élégante, c'
est `
array_map
 C'est une fonction qui prend en paramètres une fonction anonyme et un array. La fonction anonyme est en fait ce qu'on va faire pour transformer le tableau passé en 2ème paramètres.
```php
$tenBestRestaurants = array_map(function($data) {
    return $this->getDoctrine()->getRepository(Restaurant::class)->find($data['restaurantId']);
}, $tenBestRestaurantsId);
```


