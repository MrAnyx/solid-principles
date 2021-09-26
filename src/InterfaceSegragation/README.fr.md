# Interface Segregation Principle

Le principe de ségrégation des interfaces est un principe qui dit qu'une classe ne doit implémenter que les méthodes qui
lui sont réellement nécessaires. Par extension, une classe ne doit implémenter que les interfaces qui lui sont
nécessaires.

En effet, si une certaine classe ne doit pas implémenter une certaine méthode, alors il n'est pas nécessaire de l'
implémenter.

Par exemple, supposons que nous ayons une interface `MachineVolante` contenant les méthodes `allumerLesMoteurs()`
et `voler()`. Alors cette interface pourrait être implémentée sur une classe `Avion`, mais pas pour une classe `Planeur`
. En effet, dans les deux cas, la machine en question peut voler, mais, dans le cas du planeur, celui-ci n'a pas de
moteur. Il faudrait alors créer plusieurs interfaces afin de n'implémenter que les fonctions nécessaires pour la classe.

Ainsi, mieux vaut implémenter plusieurs interfaces spécifiques plutôt qu'une saule trop générique.

Appliquer ce principe permet donc de :

- Avoir des classes concises, sans superflu et qui ont un objectif précis,
- Réduire l'apparition de bug en cas de méthode non implémenté

*Auteur : Robin B (@MrAnyx)*