# Todo-list

## Prérequis obligatoire :

Installer la version version 7.4 ou une version supérieure de PHP et les extensions suivantes sont :

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) 
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- [mysqli](https://www.php.net/manual/fr/mysqli.setup.php)


## Contexte :

Pour m'approprier le framework Code Igniter 4, j'ai fais pour premier projet Todo-list qui permet de lister des tâches à faire.

Codeigniter4 est un framework PHP qui suit l' architecture MVC (Model View Controller) :

- Model : les classes métiers.
- View : pages html.
- Controller: méthodes du projets (évènements du projet).
- Dao : les classes d'accès à la base de données.



Schéma du MVC :

!['img/MVC.png'](img/MVC.png)

### Cas d'utilisation :

!['img/f2.png'](img/f15.png)

page index :

!['img/f1.png'](img/f1.PNG)

Nous avons la possibilité de réordonner les tâches en cliquant sur le bouton suivant :

!['img/f2.png'](img/f2.PNG)

Page pour modifier l'ordre des tâches (les tâches s'affichent dans l'odre croissant):

!['img/f3.png'](img/f3.PNG)

je modifie la position de la tâche éteindre le pc et l'échange avec celle dee Ranger :

!['img/f4.png'](img/f4.PNG)

Résultat :

!['img/f5.png'](img/f5.PNG)

Pour ajouter une nouvelle tâche je clique sur le bouton suivant :

!['img/f10.png'](img/f10.PNG)

Formulaire  pour ajouter la tâche :

!['img/f7.png'](img/f7.PNG)

!['img/f8.png'](img/f8.PNG)

la nouvelle tâche a bien été ajouté, pour la modifier je clique sur le bouton gris :

!['img/f9.png'](img/f9.PNG)

Formulaire de modification :

!['img/11.png'](img/f11.PNG)

la tâche a bein été modifiée.



!['img/f12.png'](img/f12.PNG)

Pour indiquer que la tâche a bien été effectuée, je clique sur le bouton  bleu :

!['img/f13.png'](img/f13.PNG)

Pour supprimer la tâche qui été faîte j'ai cliqué sur le bouton rouge :

!['img/f14.png'](img/f14.PNG)

