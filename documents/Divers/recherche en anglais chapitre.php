<?php

Authentification :

Créer l'entité User

bin/console make:user User
Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]:
> yes


Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
> email

Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).

Does this app need to hash/check user passwords? (yes/no) [yes]:
> yes


 Explications des lignes :

> Do you want to store user data in the database (via Doctrine)? (yes/no) [yes]
> - Est-ce que vous souhaitez enregistrer les utilisateurs en base de données avec Doctrine ? Oui bien sûr ! `yes`

> Enter a property name that will be the unique "display" name for the user (e.g. email, username, uuid) [email]:
> - Quelle sera la propriété de votre entité User qui serviva de login ? On choisit `email`

> Will this app need to hash/check user passwords? Choose No if passwords are not needed or will be checked/hashed by some other system (e.g. a single sign-on server).
> Does this app need to hash/check user passwords? (yes/no) [yes]:
> - Est-ce que notre application a besoin de hasher les mots de passe (c'est à dire les chiffrer) ? Évidemment oui ! `yes`

Créer un formulaire de création d'utilisateurs :

bin/console make:registration-form

Creating a registration form for App\Entity\User

Do you want to add a @UniqueEntity validation annotation on your User class to make sure duplicate accounts aren't created? (yes/no) [yes]:


Do you want to automatically authenticate the user after registration? (yes/no) [yes]:



 Explication des lignes :

> Do you want to add a @UniqueEntity validation annotation on your User class to make sure duplicate accounts aren't created? (yes/no) [yes]:

> - Est-ce que l'on souhaite que nos utilisateurs soient uniques sur le champ de login, leur e-mail donc ? Oui ! `yes`

> Do you want to automatically authenticate the user after registration? (yes/no) [yes]:

> - Est-ce que l'on veut que nos utilisateurs soient logués automatiquement après la création du compte ? Oui ! `yes`

Migration
Maintenant que l'entité est créée, on peut faire une migration pour créer la table en base de données :

bin/console doctrine:migrations:migrate
bin/console make:migration
bin/console doctrine:migrations:migrate




Unable to generate a URL for the named route "" as such route does not exist.



// AbstractController->redirectToRoute('') in src/Controller/RegistrationController.php (line 39)

    $entityManager->persist($user);
    $entityManager->flush();
    // do anything else you need here, like send an email
    
    return $this->redirectToRoute('');
}


C'est en fait vraiment très clair : nous devons modifier `RegistrationController.php` (un des fichiers créés par `
make:registration-form`) et lui indiquer, à la ligne qui nous est donnée, où nous devons rediriger l'utilisateur après qu'il se soit créé un compte. 
Idéalement vers une page 
compte utilisateur par exemple, mais comme nous n'en avons pas, redirigeons-le vers la page d'accueil. 
Dans la correction, 
le nom de la route (dans `` 
pour rappel) est ``.

Dans `RegistrationController.php` en ligne 39 :


return $this->redirectToRoute('');


Nous venons de créer notre premier compte utilisateur.

et nous l'avons rediriger vers la page d'accueil. 
Remarque :

Il faut bien prendre le temps d'étudier tous les nouveaux fichiers qui ont été créés par 'make:registration-form'
. La création de User est plutôt complexe car beaucoup de choses entrent en compte (des sessions, le hashage des mots de passe...). 
Beaucoup de choses sont à apprendre des fichiers créés par Symfony.

Gérer le login d'utilisateurs :

Maintenant que nos utilisateurs peuvent créer un compte, il va falloir les loguer :


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

Explication des lignes :

> What style of authentication do you want? [Empty authenticator]:

> - Symfony nous demande si il faut gérer l'authentification par un formulaire (c'est ce que nous voulons) ou par autre chose (login avec Google, Facebook, via une API...). 
Ici, on remplit : `1`

> The class name of the authenticator to create (e.g. AppCustomAuthenticator):

> - Symfony va créer un service qui va gérer les méthodes d'authentification. Apellons-le : `LoginFormAuthenticator`

> Choose a name for the controller class (e.g. SecurityController) [SecurityController]:

> - Symfony va créer un controller qui va gérer les routes d'authentification (/login par exemple). 
Apellons le avec le nom par défaut: `SecurityController`

> Do you want to generate a '/logout' URL? (yes/no) [yes]:

> - Est-ce que l'on veut une route /logout créée automatiquement ? Oui ! `yes`


Corrigeons maintenant l'erreur qui a été générée. Comme pour `/register`, l'erreur est explicite et n'est pas méchante ! On n'a pas indiqué de page vers laquelle rediriger un utilisateur qui vient d'être logué.

Dans `LoginFormAuthenticator.php`, 
remplacez en lignes 97-98 :


// For example : return new RedirectResponse($this->urlGenerator->generate('some_route'));
throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);


par ce qui est indiqué en commentaire, avec une route valide... la page d'accueil par exemple :


return new RedirectResponse($this->urlGenerator->generate('accueil_index'));

Remarque :

Il faut actualisez. 
Pour vérifier si on est connectés, il faut vérifiez dans la barre de débug de Symfony : 
l'email de l'utilisateur devrait apparaître. 
On allant sur '/logout' pour se déloguer,
: ça devrait remplacer 
l'adresse mail est remplacer par "anon." (comme anonyme) !

