## Moostack test

**Pour la petite explications**,

J’ai fais les differentes pages sans passer par l’api, parce que n’utilsant pas de framework front je voulais pas perdre de temps à faire des foreach et des appends en Jquery.

J’ai pris le choix de mettre les functions pour les pages
 Mon Dashboard - Mon Book - Mes Documents - Mes compétences - Mes évaluations
Dans le AccountController car ce sont des pages propre a l’utilsateur, et les requetes se font via la relation de l’utilisateur exemple :  ``Auth::user()->getSkills``

Voila.

Au niveau de l’api, j’en ai fait une seulement pour des GET (le reste n’etait pas préciser)

L’api est securisé avec un middleware Oauth2.0, il faut donc passé un baerer token pour pouvoir avoir accès au donnée, ce baerer on peut le recuperer soit en etant deja authentifié, en fesant un appel post sur ``/api/users/oauth/token`` soit lors de l’authifications via ajax on peut faire un call post sur ``/api/users/login/oauth``, qui authentifiera l’utilisateur et  renvera le baerer token.

Pour plus de simplicité et comme je l’ai dit plus haut je n’ai pas utilisé de framework front (tel que vue ou react) donc ce que j’ai fait c’est lors du login actuellement un baerer est automatiquement crée et stocké en sessions. (Pour que vous y accès plus facilement si vous voulez faire des tests avec insomnia ou Postman)
