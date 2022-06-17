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


