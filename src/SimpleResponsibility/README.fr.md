# Simple Responsibility Principle

Ce premier principe est probablement le plus connu de tous. Comme son nom peut l'indiquer, celui-ci dit que chaque
fonction, chaque classe doit être la plus spécialisée possible. Ces éléments ne doivent avoir qu'une seule
responsabilité.

Dans de nombreux cas, il est plus simple de développer et de maintenir une classe ou une fonction qui n'a qu'un seul
but. En d'autres termes, il faut à tout prix éviter les classes et les fonctions "couteau suisse". Mieux vaut développer
plusieurs classes spécialisées plutôt qu'une seule qui fait tout.

De plus, c'est ce principe qui sera principalement appliqué lors de la programmation orientée aspect, car l'ensemble des
préoccupations transversales (cross-cutting concerns) seront dissociées de la logique principe de la méthode.

Ainsi, en appliquant ce principe, il sera bien plus simple, en tant que développeur de :

- Maintenir les classes et les fonctions, car elles n'auront qu'une seule responsabilité,
- Réutiliser les classes et les fonctions,
- Tester les classes et les fonctions, car il y aura moins de cas à prendre en compte.

*Auteur : Robin B (@MrAnyx)*