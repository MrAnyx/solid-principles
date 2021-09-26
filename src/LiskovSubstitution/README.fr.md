# Liskov Substitution Principle

Le principe de la substitution de Liskov est particulièrement simple à comprendre. Celui-ci indique que toutes les
sous-classes d'une classe parente doivent pouvoir effectuer les mêmes actions. Si tel est le cas, il sera alors possible
d'inter changer une classe parent avec l'une des classes enfants sans qu'il y ait de problèmes.

Généralement, à l'aide de d'héritage, ce principe permet d'homogénéiser le comportement des classes que l'on crée pour
un projet.

Par exemple, si nous créons une classe `Mustang` et `Ford` qui héritent d'une même classe `Voiture`, il faut que les
classes `Mustang` et `Ford` aient le même comportement que la classe `Voiture` pour que, le cas échéant, il soit
possible d'inter changer, par exemple, la classe `Mustang` avec la classe `Voiture` sans qu'il y ait de problèmes.

En appliquant ce type de principe, il sera alors possible de :

- Réduire la probabilité de bugs,
- Rendre notre code plus logique.

*Auteur : Robin B (@MrAnyx)*